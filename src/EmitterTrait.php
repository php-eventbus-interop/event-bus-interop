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
     * @param array ...$events The events triggered
     */
    public function emit(...$events)
    {
        foreach ($events as $event) {
            $this->parseEvent($event);
        }
    }

    /**
     * @param \EventIO\InterOp\EventInterface $event
     * @return mixed
     */
    abstract public function emitEvent(EventInterface $event);

    /**
     * @param $event
     * @return mixed
     */
    abstract public function emitName($event);

    /**
     * @param $event
     * @return mixed
     */
    private function parseEvent($event)
    {
        if ($event instanceof EventInterface) {
            return $this->emitEvent($event);
        }
        return $this->emitName($event);
    }
}
