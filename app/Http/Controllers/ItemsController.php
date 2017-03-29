<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller {
    public function getIndex() {
        $items = Item::orderBy('name', 'asc')->get();
        return view('items.index', ['items' => $items]);
    }

    public function getDetail($id) {
        $item = Item::find($id);

        return view('items.detail', ['item' => $item]);
    }

    public function getCreate() {
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        return view('items.create', ['manufacturers' => $manufacturers, 'categories' => $categories]);
    }

    public function postCreate(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:2',
            'code' => 'required|min:2',
            'description' => 'required|min:1'
        ]);

        $item = new Item();
        
        $item->manufacturer_id = $request->input('manufacturer_id');
        $item->category_id = $request->input('category_id');
        $item->name = $request->input('name');
        $item->code = $request->input('code');
        $item->description = $request->input('description');
        $item->quantity_on_hand = 0;

        $item->save();

        return redirect()
                    ->route('items.index')
                    ->with('info', $item->name.' item has been created with id='.$item->id);
    }

    public function getUpdate($id) {
        $item = Item::find($id);

        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        return view('items.update', [
            'item' => $item,
            'manufacturers' => $manufacturers,
            'categories' => $categories
        ]);
    }

    public function postUpdate(Request $request) {
         $this->validate($request, [
            'name' => 'required|min:2',
            'code' => 'required|min:2',
            'description' => 'required|min:1'
        ]);

        $item = Item::find($request->input('id'));

        $item->manufacturer_id = $request->input('manufacturer_id');
        $item->category_id = $request->input('category_id');
        $item->name = $request->input('name');
        $item->code = $request->input('code');
        $item->description = $request->input('description');

        $item->save();

        return redirect()
                    ->route('items.index')
                    ->with('info', $item->name.' item has been updated.');
    }

    public function getDelete($id) {
        $item = Item::find($id);

        return view('items.delete', [
            'item' => $item
        ]);
    }

    public function postDelete(Request $request) {
        $item = Item::find($request->input('id'));

        $item->delete();

        return redirect()
            ->route('items.index')
            ->with('info', $item->name.' item has been deleted.');
    }
}
