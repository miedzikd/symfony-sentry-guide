<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route(name="test", path="/test")
     */
    public function testLog()
    {
        $this->logger->info('My custom logged info.');
        $this->logger->error('My custom logged error.');

        return new JsonResponse(['status' => 'ok']);
    }
}
