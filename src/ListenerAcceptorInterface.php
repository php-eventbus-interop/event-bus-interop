<?php
namespace InterOp\EventBus;

/**
 * Interface ListenerAcceptorInterface
 * @package InterOp\EventBus
 */
interface ListenerAcceptorInterface
{
    const PRIORITY_NORMAL = 0;

    /**
     * @param string                     $eventName The name of the event to listen for
     * @param callable|ListenerInterface $listener  A listener or callable
     * @param int                        $priority  Used to prioritise listeners for the same event
     * @return mixed
     */
    public function addListener(
        $eventName,
        $listener,
        $priority = self::PRIORITY_NORMAL
    );
}
