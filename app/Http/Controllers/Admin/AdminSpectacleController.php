<?php

namespace App\Http\Controllers\Admin;


use App\Models\Spectacle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSpectacleController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["spectacles"] = Spectacle::all();
        return view('admin.spectacle.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        $newSpectacle = new Spectacle();
        $newSpectacle->setName($request->input('name'));
        $newSpectacle->setBudget($request->input('budget'));
        $newSpectacle->setAfisha($request->input('date'));
        $newSpectacle->save();

        return back();
    }

    public function delete($id)
    {
        Spectacle::destroy($id);
        return back();
    }
    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Изменить";
        $viewData["spectacle"] = Spectacle::findOrFail($id);
        return view('admin.spectacle.edit')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        Spectacle::validate($request);
        
        $spectacle = Spectacle::findOrFail($id);
        $spectacle->setName($request->input('name'));
        $spectacle->setBudget($request->input('budget'));
        $spectacle->setAfisha($request->input('date'));

        $spectacle->save();
        return redirect()->route('admin.spectacle.index');
    }
}
