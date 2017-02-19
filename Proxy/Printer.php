<?php

namespace Proxy;

use function Util\println;

class Printer implements PrintableInterface
{
    private $name;
    
    public function __construct($name)
    {
        $this->name = $name;
        $this->heavyJob("Creating instance of {$this->name}");
    }

    public function setPrinterName($name)
    {
        $this->name = $name;
    }
    
    public function getPrinterName()
    {
        return $this->name;
    }

    public function doPrint($string)
    {
        println("=== {$this->name} ===");
        println($string);
    }

    /**
     * @param string $message
     * @return void
     */
    private function heavyJob($message)
    {
        println($message);
        
        for ($i = 0; $i < 5; $i++) {
            sleep(1);
            echo '.';
        }
        
        println('done');
    }
}