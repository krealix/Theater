<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Роли";
        $viewData["subtitle"] = "Список ролей";

        $viewData["roles"] = Role::all();
        return view('role.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $role = Role::findOrFail($id);


        $viewData["title"] = $role->getName()." - Театр";
        $viewData["subtitle"] = $role->getName()." - Информация о роли";
        $viewData["role"] = $role;
        return view('role.show')->with("viewData", $viewData);
    }
}