<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{

  protected string $kernelProjectDir;

  public function __construct(string $kernelProjectDir)
  {
    $this->kernelProjectDir = $kernelProjectDir;

  }
  /**
   * @Route("/")
   */
  public function index(Request $request): JsonResponse
  {
    $composerStr = file_get_contents($this->kernelProjectDir."/composer.json");
    $composerJson = json_decode($composerStr);

    return new JsonResponse(
      [
        "name" => $composerJson->name,
        "version" => $composerJson->version,
        "hostname" => $request->getHost(),
      ]
    );
  }
}
