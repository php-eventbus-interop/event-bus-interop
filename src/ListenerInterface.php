<?php
namespace EventIO\InterOp;

use EventIO\InterOp\EventInterface;

/**
 * Interface ListenerInterface
 * @package EventIO\InterOp
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
