<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function getIndex()
    {
        $departments = Department::orderBy('name', 'asc')->get();
        return view('departments.index', ['departments' => $departments]);
    }

    public function getCreate()
    {
        $departments = Department::all();
        return view('departments.create', ['departments' => $departments]);
    }

    public function postCreate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'description' => 'required|min:1'
        ]);
        $department = new Department();
        $department->name = $request->input('name');
        $department->description = $request->input('description');

        $department->save();

        return redirect()
                    ->route('departments.index')
                    ->with('info', $department->name.' department has been created with id='.$department->id);
    }

    public function getUpdate($id)
    {
        $department = Department::find($id);
        return view('departments.update', ['department' => $department]);
    }

    public function postUpdate(Request $request)
    {
        $department = Department::find($request->input('id'));
        $department->name = $request->input('name');
        $department->description = $request->input('description');
        $department->save();
        
        return redirect()
                ->route('departments.index')
                ->with('info', $department->name.' department has been updated.');
    }

    public function getDelete($id)
    {
        $department = Department::find($id);
        return view('departments.delete', ['department' => $department]);
    }

    public function postDelete(Request $request)
    {
        $department = Department::find($request->input('id'));
        $department->delete();
        
        return redirect()
                ->route('departments.index')
                ->with('info', $department->name.' department has been deleted.');
    }
}
