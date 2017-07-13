<?php
namespace EventIO\InterOp;

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
     * @param EventInterface $event An event to emit
     * @return mixed
     */
    abstract public function emitEvent(EventInterface $event);

    /**
     * @param string $event An event name
     * @return mixed
     */
    abstract public function emitName($event);

    /**
     * @param string|EventInterface $event An event received
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
