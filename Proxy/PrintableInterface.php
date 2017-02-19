<?php

namespace Proxy;

interface PrintableInterface
{
    /**
     * @param string $name
     * @return void
     */
    function setPrinterName($name);

    /**
     * @return string
     */
    function getPrinterName();

    /**
     * @param string $string
     * @return void
     */
    function doPrint($string);
}