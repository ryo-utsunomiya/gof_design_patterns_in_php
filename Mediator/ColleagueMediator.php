<?php

namespace Mediator;

class ColleagueMediator
{
    /**
     * @var Colleague[]
     */
    private $colleagues = [];

    /**
     * @param Colleague $sender
     * @param string $message
     */
    public function postMessage(Colleague $sender, $message)
    {
        foreach ($this->colleagues as $colleague) {
            if ($colleague->getName() !== $sender->getName()) {
                $colleague->receiveMessage($message, $sender->getName());
            }
        }
    }

    public function register(Colleague $colleague)
    {
        $this->colleagues[] = $colleague;
        return $this;
    }
}