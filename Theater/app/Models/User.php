<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Contract;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    #admin 
    # email: andrew@gmail.com
    # pass: pass
    protected $fillable = [
        "client_name",
        "email",
        "password",
        "phone",
        "age",
        "role",
        "work_experience"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

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
        return $this->attributes['client_name'];
    }
    public function setName($client_name)
    {
        $this->attributes['client_name'] = $client_name;
    }
    public function getEmail()
    {
        return $this->attributes['email'];
    }
    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }
    public function getPassword()
    {
        return $this->attributes['password'];
    }
    public function setPassword($password)
    {
        $this->attributes['password'] = $password;
    }
    public function getPhone()
    {
        return $this->attributes['phone'];
    }
    public function setPhone($phone)
    {
        $this->attributes['phone'] = $phone;
    }
    public function getWeb_Role()
    {
        return $this->attributes['web_role'];
    }
    public function setWeb_Role($web_role)
    {
        $this->attributes['web_role'] = $web_role;
    }
    public function getRole()
    {
        return $this->attributes['role'];
    }
    public function setRole($role)
    {
        $this->attributes['role'] = $role;
    }
    public function getAge()
    {
        return $this->attributes['age'];
    }
    public function setAge($age)
    {
        $this->attributes['age'] = $age;
    }
    public function getWorkExperience()
    {
        return $this->attributes['work_experience'];
    }
    public function setWorkExperience($work_experience)
    {
        $this->attributes['work_experience'] = $work_experience;
    }
}