<?php

// construct property promotion and new initialize

class FirstService
{
    public function execute()
    {
        return "first service running";
    }
}

class SecondService
{
    public function __construct( private ?FirstService $service = new FirstService)
    {
        
    }

    public function handle()
    {
        return $this->service->execute();
    }
}

$service = new SecondService(new FirstService());

echo $service->handle(); 


