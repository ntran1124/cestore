<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Http\Request;

class CategoriesController extends Controller {
    public function getIndex() {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('categories.index', ['categories' => $categories]);
    }

    public function getDetail($id) {
        //return "I'm here";
        $category = Category::find(1);
        return view('categories.detail', ['category' => $category]);
    }

    public function getCreate() {
        $departments = Department::all();
        return view('categories.create', ['departments' => $departments]);
    }

    public function postCreate(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:2',
            'code' => 'required|min:2',
            'description' => 'required|min:1'
        ]);
        $category = new Category();
        $category->department_id = $request->input('department_id');
        $category->name = $request->input('name');
        $category->code = $request->input('code');
        $category->description = $request->input('description');

        $category->save();

        return redirect()
                    ->route('categories.index')
                    ->with('info', $category->name.' category has been created with id='.$category->id);
    }

    public function getUpdate($id) {
        $category = Category::find($id);
        $departments = Department::all();
        return view('categories.update', [
            'category' => $category,
            'departments' => $departments
        ]);
    }

    public function postUpdate(Request $request) {
        $category = Category::find($request->input('id'));

        $category->department_id = $request->input('department_id');
        $category->name = $request->input('name');
        $category->code = $request->input('code');
        $category->description = $request->input('description');

        $category->save();

        return redirect()
            ->route('categories.index')
            ->with('info', $category->name.' category has been updated.');
    }

    public function getDelete($id) {
        $category = Category::find($id);
        return view('categories.delete', [
            'category' => $category
        ]);
    }

    public function postDelete(Request $request) {
        $category = Category::find($request->input('id'));

        $category->delete();

        return redirect()
            ->route('categories.index')
            ->with('info', $category->name.' category has been deleted.');
    }
}
