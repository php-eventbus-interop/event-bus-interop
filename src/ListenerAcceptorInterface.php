<?php
namespace EventIO\InterOp;

/**
 * Interface ListenerAcceptorInterface
 * @package EventIO\InterOp
 */
interface ListenerAcceptorInterface
{
    const PRIORITY_LOW      = 1;
    const PRIORITY_NORMAL   = 2;
    const PRIORITY_HIGH     = 4;
    const PRIORITY_URGENT   = 8;
    const PRIORITY_CRITICAL = 16;

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
