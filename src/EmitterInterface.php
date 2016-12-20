<?php
namespace InterOp\EventBus;

use InterOp\EventBus\EventInterface;

/**
 * Interface EmitterInterface
 * @package InterOp\EventBus\Emitter
 */
interface EmitterInterface
{
    /**
     * @param EventInterface|string $event The event triggered
     * @return mixed
     */
    public function emit($event);

    /**
     * @param EventInterface $event The event triggered
     * @return mixed
     */
    public function emitEvent(EventInterface $event);

    /**
     * @param string $event The event name to listen for
     * @return mixed
     */
    public function emitName($event);
}
