<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 20:42:28 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductosSubCateg
 * 
 * @property int $id_sub_categ
 * @property int $id_categ
 * @property string $nom_sub_categ
 * @property bool $inactivo
 * 
 * @property \App\Models\ProductosCateg $productos_categ
 * @property \Illuminate\Database\Eloquent\Collection $productos_prsntciones
 *
 * @package App\Models
 */
class ProductosSubCateg extends Eloquent
{
	protected $table = 'productos_sub_categ';
	protected $primaryKey = 'id_sub_categ';
	public $timestamps = false;

	protected $casts = [
		'id_categ' => 'int',
		'inactivo' => 'bool'
	];

	protected $fillable = [
		'id_categ',
		'nom_sub_categ',
		'inactivo'
	];

	public function productos_categ()
	{
		return $this->belongsTo(\App\Models\ProductosCateg::class, 'id_categ');
	}

	public function productos_prsntciones()
	{
		return $this->hasMany(\App\Models\ProductosPrsntcione::class, 'id_sub_categ');
	}
}
