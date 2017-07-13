<?php
namespace EventIO\InterOp;

/**
 * Trait EventTrait
 * @package EventIO\InterOp
 */
trait EventTrait
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $propogationStopped = false;


    /**
     * The name of the event
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Check whether propagation was stopped.
     *
     * @return bool
     */
    public function isPropagationStopped(): bool
    {
        return ($this->propogationStopped);
    }

    /**
     * @return self
     */
    public function stopPropagation(): self
    {
        $this->propogationStopped = true;

        return $this;
    }
}
