<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminRoleController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page";
        $viewData["roles"] = Role::all();
        return view('admin.role.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $newRole = new Role();
        $newRole->setName($request->input('name'));
        $newRole->setDescription($request->input('description'));
        $newRole->setImage("game.png");
        $newRole->save();

        if ($request->hasFile('image')) {
            $imageName = $newRole->getId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newRole->setImage($imageName);
            $newRole->save();
        }

        return back();
    }

    public function delete($id)
    {
        Role::destroy($id);
        return back();
    }
    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Изменить";
        $viewData["role"] = Role::findOrFail($id);
        return view('admin.role.edit')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        Role::validate($request);
        $role = Role::findOrFail($id);
        $role->setName($request->input('name'));
        $role->setDescription($request->input('description'));
        if ($request->hasFile('image')) {
            $imageName = $role->getId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $role->setImage($imageName);
        }
        $role->save();
        return redirect()->route('admin.role.index');
    }

}
