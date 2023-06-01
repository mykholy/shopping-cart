<?php

namespace Mykholy\ShoppingCart\Facades;

use Illuminate\Support\Facades\Facade as Base;

/**
 * @see \Mykholy\ShoppingCart\CartManager
 */
class Cart extends Base
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}
