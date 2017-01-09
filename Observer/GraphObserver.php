<?php


namespace Observer;


class GraphObserver implements NumberObserverInterface
{
    /**
     * @param NumberGenerator $generator
     * @return void
     */
    public function update(NumberGenerator $generator)
    {
        printf("Graph Observer: %s\n", str_repeat('*', $generator->getNumber()));
        usleep(0.1 * 1000 * 1000);
    }
}