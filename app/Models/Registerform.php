<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Registerform extends Authenticatable
{
    use HasFactory;
    protected $table='registerforms';
    protected $fillable = [
        'first_name','last_name','company','email','phone','password'
    ];

  public function is_admin()
  {
      if($this->admin)
      {
          return true;
      }
      return false;

  }


}
