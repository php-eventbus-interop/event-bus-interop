<?php
namespace EventIO\InterOp\Examples;

use EventIO\InterOp\EmitterInterface;
use EventIO\InterOp\EmitterTrait;
use EventIO\InterOp\EventInterface;

final class SimpleEmitter implements EmitterInterface
{
    use EmitterTrait;

    /**
     * {@inheritdoc}
     */
    public function emitEvent(EventInterface $event)
    {
        // TODO: Implement emitEvent() method.
    }

    /**
     * {@inheritdoc}
     */
    public function emitName($event)
    {
        // TODO: Implement emitName() method.
    }
}