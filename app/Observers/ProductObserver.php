<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductObserver
{

    public function creating(Product $product)
    {
        $product->created_by = Auth::user()->name;
    }

    public function updating(Product $product)
    {
        $product->updated_by = Auth::user()->name;
    }
}
