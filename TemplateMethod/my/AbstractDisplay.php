<?php

namespace TemplateMethod\my;

abstract class AbstractDisplay
{
    abstract protected function open();
    abstract protected function show();
    abstract protected function close();

    final public function display()
    {
        $this->open();

        for ($i = 0; $i < 5; $i++) {
            $this->show();
        }

        $this->close();
    }
}
