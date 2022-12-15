<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Spectacle extends Model
{

    /*
    REQUIREMENT ATRIBUTES
    $table->integer('wage');
    $table->integer('age');
    $table->boolean('payability');
    */
    public static function validate($request)
    {
        $request->validate([
            "name" => "required",
            "budget" => "required",
            "date" => "required"
        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getBudget()
    {
        return $this->attributes['budget'];
    }
    public function setBudget($budget)
    {
        $this->attributes['budget'] = $budget;
    }
    public function getAfisha()
    {
        return $this->attributes['date'];
    }
    public function setAfisha($date)
    {
        $this->attributes['date'] = $date;
    }
}
