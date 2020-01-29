<?php

namespace FilippoToso\OpenGraphProtocol;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Filippotoso\Travelport\Skeleton\SkeletonClass
 */
class OpenGraphProtocolFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'opengraphprotocol';
    }
}
