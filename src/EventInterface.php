<?php
namespace EventIO\InterOp;

/**
 * Interface EventInterface
 * @package EventIO\InterOp
 */
interface EventInterface
{
    /**
     * The name of the event
     * @return string
     */
    public function name();

    /**
     * Check whether propagation was stopped.
     *
     * @return bool
     */
    public function isPropagationStopped();

    /**
     * @return self
     */
    public function stopPropagation();
}
