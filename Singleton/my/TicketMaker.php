<?php

namespace my;

class TicketMaker
{
    /**
     * @var TicketMaker
     */
    private static $instance;

    /**
     * @var int
     */
    private $ticket = 1000;

    private function __construct() { }

    /**
     * @return TicketMaker
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return int
     */
    public function getNextTicketNumber()
    {
        return $this->ticket++;
    }
}
