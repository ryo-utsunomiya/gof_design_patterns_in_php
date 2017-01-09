<?php

namespace Observer;

abstract class NumberGenerator
{
    /**
     * @var NumberObserverInterface[]
     */
    private $observers = [];

    /**
     * @param NumberObserverInterface $observer
     * @return void
     */
    public function addObserver(NumberObserverInterface $observer)
    {
        $this->observers[spl_object_hash($observer)] = $observer;
    }

    /**
     * @param NumberObserverInterface $observer
     * @return void
     */
    public function deleteObserver(NumberObserverInterface $observer)
    {
        unset($this->observers[spl_object_hash($observer)]);
    }

    /**
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return int
     */
    abstract public function getNumber();

    /**
     * @return void
     */
    abstract public function execute();
}