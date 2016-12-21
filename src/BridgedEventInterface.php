<?php
namespace EventIO\InterOp;

/**
 * Interface BridgedEventInterface
 * @package EventIO\InterOp
 */
interface BridgedEventInterface
{
    /**
     * Return the wrapped InterOp Event.
     * @return EventInterface
     */
    public function getWrappedEvent();
}
