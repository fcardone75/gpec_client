<?php

namespace Bni\Gpec\Logger;

use Monolog\Handler\StreamHandler;
use Psr\Log\LogLevel;

class Logger
{
    private \Monolog\Logger $logger;

    public function __construct(?int $upFolderEnvFile = 2)
    {
        $symfonyLogPath = dirname(__DIR__, $upFolderEnvFile).'/var/log/gpec.log'; // Adjust this path
        $this->logger = new \Monolog\Logger('GpecServiceLogger');
        $this->logger->pushHandler(new StreamHandler($symfonyLogPath, LogLevel::DEBUG));
    }


    /**
     * @return \Monolog\Logger
     */
    public function getLogger(): \Monolog\Logger
    {
        return $this->logger;
    }
}
