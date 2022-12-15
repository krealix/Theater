<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Spectacle;

class SpectacleController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Спектакли";
        $viewData["subtitle"] = "Список спектаклей";

        $viewData["spectacles"] = Spectacle::all();
        return view('spectacle.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $spectacle = Spectacle::findOrFail($id);

        $viewData["name"] = $spectacle->getName() . " - Название спектакля";
        $viewData["budget"] = $spectacle->getBudget() . " - Бюджет";
        $viewData["date"] = $spectacle->getAfisha() . " - Дата выступления";

        $viewData["spectacle"] = $spectacle;
        return view('spectacle.show')->with("viewData", $viewData);
    }
}
