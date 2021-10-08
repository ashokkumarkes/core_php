<?php 
interface Worker {
    public function run();
    }
       abstract class AbstractWorker implements Worker {
        protected $pdo;
        protected $logger;
        public function __construct(PDO $pdo, Logger $logger) {
        $this->pdo = $pdo;
        $this->logger = $logger;
        }
        public function run() {
        try {
        $this->setMemoryLimit($this->getMemoryLimit());
        $this->logger->log("Preparing main");
        $this->prepareMain();
        $this->logger->log("Executing main");
        $this->main();
        } catch (Throwable $e) {
        // Catch and rethrow all errors so they can be logged by the worker
        $this->logger->log("Worker failed with exception: {$e->getMessage()}");
        throw $e;
        }
        }
        private function setMemoryLimit($memoryLimit) {
        ini_set('memory_limit', $memoryLimit);
        $this->logger->log("Set memory limit to $memoryLimit");
        }
        abstract protected function getMemoryLimit();
        abstract protected function prepareMain();
        abstract protected function main();
        }
?>  