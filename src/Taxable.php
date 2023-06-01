<?php

namespace Mykholy\ShoppingCart;

interface Taxable
{
    /**
     * Get the tax rate for this item.
     *
     * @return int|float
     */
    public function getTaxRate();
}
