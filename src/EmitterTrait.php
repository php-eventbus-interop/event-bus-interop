<?php
namespace EventIO\InterOp;

use EventIO\InterOp\EventInterface;

/**
 * Trait EmitterTrait
 * @package EventIO\InterOp
 */
trait EmitterTrait
{
    /**
     * @param EventInterface|string $event The event triggered
     * @return mixed
     */
    public function emit($event)
    {
        if ($event instanceof EventInterface) {
            return $this->emitEvent($event);
        }

        return $this->emitName($event);
    }

    /**
     * @param EventInterface $event The event triggered
     * @return mixed
     */
    abstract public function emitEvent(EventInterface $event);

    /**
     * @param string $event The event name to listen for
     * @return mixed
     */
    abstract public function emitName($event);
}
