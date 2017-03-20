<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function getIndex()
    {
        //$items = Item::orderBy('name', 'asc')->get();
        //return view('items.index', ['items' => $items]);
        return view('items.index');
    }    
}
