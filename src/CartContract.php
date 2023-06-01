<?php

namespace Mykholy\ShoppingCart;

use Mykholy\ShoppingCart\Models\CartItemCollection;

interface CartContract
{
    /**
     * Get the cart contents.
     *
     * @return \Mykholy\ShoppingCart\Models\CartItemCollection|\Mykholy\ShoppingCart\Models\CartItem[]
     */
    public function content(): CartItemCollection;

    /**
     * Get the subtotal of items in the cart.
     *
     * @return int|float
     */
    public function subtotal();

    /**
     * Add an item to the cart.
     *
     * @param  \Mykholy\ShoppingCart\Buyable  $buyable
     * @param  int  $quantity
     */
    public function add(Buyable $buyable, int $quantity);

    /**
     * Change the quantity of an item in the cart.
     *
     * @param  int  $item
     * @param  int  $quantity
     */
    public function update(int $item, int $quantity);

    /**
     * Remove an item from the cart.
     *
     * @param  int  $item
     */
    public function remove(int $item);

    /**
     * Destroy the cart instance.
     */
    public function destroy();
}
