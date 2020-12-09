#!/bin/bash

provisionIfNeeded()
{
    PROVISIONED=/tmp/provisioned
    if [ ! -f ${PROVISIONED} ]; then

        echo "------------------------------------------------------------------------------"
        echo "Provisioning"
        echo "APP_ENV=$APP_ENV"
        echo "------------------------------------------------------------------------------"

        if [ "$APP_ENV" == "dev" ]; then
          composer --no-interaction install && \
          composer --no-interaction dump-autoload --optimize --no-scripts && \
          composer --no-interaction run-script  auto-scripts
          php bin/console cache:clear --env=dev
        else
          composer --no-interaction dump-autoload --no-dev --optimize --no-scripts && \
          composer --no-interaction run-script --no-dev auto-scripts
          php bin/console cache:clear --env=${APP_ENV}
        fi

        echo "------------------------------------------------------------------------------"
        echo "Ended provisioning"
        echo "------------------------------------------------------------------------------"

        touch ${PROVISIONED}
    fi

    # always ensure database exists
    php bin/console doctrine:database:create --if-not-exists

    # always migrate to latest schema
    php bin/console doctrine:migrations:migrate --no-interaction
}

provisionIfNeeded
apachectl -D FOREGROUND "$@"

