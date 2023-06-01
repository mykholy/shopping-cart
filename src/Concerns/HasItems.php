<?php

namespace Mykholy\ShoppingCart\Concerns;

use Mykholy\ShoppingCart\Models\CartItemCollection;

trait HasItems
{
    /**
     * @var \Mykholy\ShoppingCart\Models\Cart
     */
    protected $cart;

    /**
     * Get the cart contents.
     *
     * @return \Mykholy\ShoppingCart\Models\CartItemCollection|\Mykholy\ShoppingCart\Models\CartItem[]
     */
    public function items(): CartItemCollection
    {
        return $this->cart->items;
    }
}
