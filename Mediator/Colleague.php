<?php

namespace Mediator;

class Colleague
{
    private $name;

    /**
     * Colleague constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param ColleagueMediator $mediator
     * @param string $message
     */
    public function sendMessage(ColleagueMediator $mediator, $message)
    {
        $mediator->postMessage($this, $message);
    }

    /**
     * @param string $message
     * @param string $senderName
     */
    public function receiveMessage($message, $senderName)
    {
        printf("%s, message from: %s : %s\n", $this->name, $senderName, $message);
    }
}