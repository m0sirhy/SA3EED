<?php

namespace App\Http\Livewire;

use App\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Products extends Component
{
    public $category;
    public $products;

    public function mount($category)
    {

        $this->category = $category;
        $this->products= Product::has('wear')->get();

    }

    public function updatedQuery()
    {    



    }
    public function render()
    {
        $category = $this->category;

        return view('livewire.products', compact('category'));
    }
}
