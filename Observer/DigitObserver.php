<?php


namespace Observer;


class DigitObserver implements NumberObserverInterface
{
    /**
     * @param NumberGenerator $generator
     * @return void
     */
    public function update(NumberGenerator $generator)
    {
        printf("Digit Observer: %d\n", $generator->getNumber());
        usleep(0.1 * 1000 * 1000);
    }
}