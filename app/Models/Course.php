<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  use HasFactory;

  //si se quiere modificar la tabla a la que apunta automaticamente el modelo
  //protected $table = "users";

  //ASIGNACION MASIVA
  //protected $fillable = ['name', 'category', 'description'];
  protected $guarded = []; //ignora estos campos

  public function getRouteKeyName()
  {
    return 'slug';
  }
}
