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
     * @return mixed
     */
    public function stopPropagation();
}
