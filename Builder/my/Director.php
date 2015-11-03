<?php

namespace Builder\my;

class Director
{
    /**
     * @var Builder
     */
    private $builder;

    /**
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function construct()
    {
        $this->builder->makeTitle('Greeting');
        $this->builder->makeString('From morning to noon');
        $this->builder->makeItems(
            [
                'Good Morning',
                'Hello',
            ]
        );
        $this->builder->makeString('At night');
        $this->builder->makeItems(
            [
                'Good evening',
                'Good night',
                'Good bye',
            ]
        );
        $this->builder->close();
    }
}
