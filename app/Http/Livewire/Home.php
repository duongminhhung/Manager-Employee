<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Home extends Component
{
    // public $a =5;
    public function render()
    {
        return view('livewire.admin.home');
    }

    public function index()
    {
        $product_feature = DB::table('user')
        ->join('categories', 'products.id_category', '=', 'categories.id')
        ->select('products.*', 'categories.name as name_category')
        ->inRandomOrder()
        ->limit(8)
        ->get();
    }
   
}
