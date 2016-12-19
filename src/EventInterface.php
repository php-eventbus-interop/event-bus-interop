<?php
namespace InterOp\EventBus;

/**
 * Interface EventInterface
 * @package InterOp\EventBus
 */
interface EventInterface
{
    /**
     * The name of the event
     * @return string
     */
    public function name();
}
