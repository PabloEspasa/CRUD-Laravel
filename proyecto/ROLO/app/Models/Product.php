<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{

  static $rules = [
    'nombre' => 'required|max:255',
    'precio' => 'required|numeric|max:9999',
    'descripcion' => 'required|max:255',
    'imagen' => 'required|mimes:jpg,bmp,png',
    'id_categoria' => 'required'
  ];


  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre', 'precio', 'descripcion', 'imagen', 'id_categoria'];

  public function categoria()
  {
    return $this->hasOne(Categoria::class, 'id', 'id_categoria');
  }
}
