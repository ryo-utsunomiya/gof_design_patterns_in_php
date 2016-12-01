<?php

namespace ChainOfResponsibility;

abstract class Support
{
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var Support
     */
    private $next;

    /**
     * Support constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        if (!is_string($name)) {
            throw new \InvalidArgumentException();
        }

        $this->name = $name;
    }

    /**
     * @param Support $support
     * @return Support
     */
    public function setNext(Support $support)
    {
        $this->next = $support;

        return $this->next;
    }
    
    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('[%s]', $this->name);
    }

    /**
     * @param Trouble $trouble
     * @return bool
     */
    abstract protected function resolve(Trouble $trouble);

    /**
     * @param Trouble $trouble
     */
    protected function done(Trouble $trouble)
    {
        printf("%s is resolved by %s\n", $trouble, $this);
    }

    /**
     * @param Trouble $trouble
     */
    protected function fail(Trouble $trouble)
    {
        printf("%s cannot be resolved\n", $trouble);
    }

    /**
     * @param Trouble $trouble
     */
    final public function support(Trouble $trouble)
    {
        if ($this->resolve($trouble)) {
            $this->done($trouble);
        } elseif (!is_null($this->next)) {
            $this->next->support($trouble);
        } else {
            $this->fail($trouble);
        }
    }
}