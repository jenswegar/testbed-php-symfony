<?php

namespace App\DependencyInjection\Compiler;

use Composer\CaBundle\CaBundle;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Registers a CA root bundle with the PDO MySQL driver used by Doctrine DBAL
 *
 * This allows Doctrine to connect to MySQL instances that force SSL encryption, such as Azure's.
 *
 * @see https://www.colinodell.com/blog/202002/zeroconfiguration-ssl-ca-root-bundles-doctrine-dbal-symfony
 */
final class RegisterCABundleWithPDOMysqlDriverPass implements CompilerPassInterface
{
    /**
     * @inheritDoc
     */
    public function process(ContainerBuilder $container)
    {
        $caPathOrFile = CaBundle::getSystemCaRootBundlePath();

        foreach ($container->getParameter('doctrine.connections') ?? [] as $connectionName) {
            $definition = $container->getDefinition($connectionName);
            $options = $definition->getArgument(0) ?? [];
            $options['driverOptions'][\PDO::MYSQL_ATTR_SSL_CA] = $caPathOrFile;
            $definition->setArgument(0, $options);
        }
    }
}
