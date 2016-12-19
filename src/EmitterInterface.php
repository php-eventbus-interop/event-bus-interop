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
     * @param \InterOp\EventBus\EventInterface $event The event to listen for
     * @return mixed
     */
    public function emit(EventInterface $event);
}
