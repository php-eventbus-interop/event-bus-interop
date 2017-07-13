<?php
namespace EventIO\InterOp;

use EventIO\InterOp\EventInterface;

/**
 * Interface EmitterInterface
 * @package EventIO\InterOp\Emitter
 */
interface EmitterInterface
{

    /**
     * @param array ...$events The event triggered
     * @return mixed
     */
    public function emit(...$events);

    /**
     * @param EventInterface $event The event triggered
     * @return mixed
     */
    public function emitEvent(EventInterface $event);

    /**
     * @param string $event The event name to emit
     * @return mixed
     */
    public function emitName($event);
}
