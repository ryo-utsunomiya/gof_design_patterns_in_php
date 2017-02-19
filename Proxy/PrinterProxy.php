<?php

namespace Proxy;

class PrinterProxy implements PrintableInterface
{
    private $name;

    /**
     * @var Printer
     */
    private $real;
    
    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setPrinterName($name)
    {
        if (!is_null($this->real)) {
            $this->real->setPrinterName($name);
        }
        
        $this->name = $name;
    }

    public function getPrinterName()
    {
        return $this->name;
    }

    public function doPrint($string)
    {
        $this->realize();
        $this->real->doPrint($string);
    }

    private function realize()
    {
        if (is_null($this->real)) {
            $this->real = new Printer($this->name);
        }
    }
}