<?php
namespace InterOp\EventBus;

use InterOp\EventBus\EventInterface;

/**
 * Interface ListenerInterface
 * @package InterOp\EventBus
 */
interface ListenerInterface
{
    /**
     * Handle an event.
     *
     * @param EventInterface $event The event being emitted
     *
     * @return void
     */
    public function handle(EventInterface $event);
}
