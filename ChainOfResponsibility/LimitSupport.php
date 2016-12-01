<?php

namespace ChainOfResponsibility;

class LimitSupport extends Support
{
    /**
     * @var int
     */
    private $limit;

    /**
     * LimitSupport constructor.
     * @param string $name
     * @param int $limit
     */
    public function __construct($name, $limit)
    {
        if (!is_int($limit)) {
            throw new \InvalidArgumentException();
        }

        parent::__construct($name);
        $this->limit = $limit;
    }

    /**
     * @param Trouble $trouble
     * @return bool
     */
    protected function resolve(Trouble $trouble)
    {
        return $trouble->getNumber() < $this->limit;
    }
}