<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryObserver
{

    public function creating(Category $category)
    {
        $category->created_by = Auth::user()->name;
    }

    public function updating(Category $category)
    {
        $category->updated_by = Auth::user()->name;
    }
}
