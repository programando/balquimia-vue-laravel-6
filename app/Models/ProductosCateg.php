<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 20:42:10 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductosCateg
 *
 * @property int $id_categ
 * @property string $nom_categ
 * @property float $dvsor_grp_b
 * @property float $dvsor_grp_b1
 * @property bool $inactivo
 *
 * @property \Illuminate\Database\Eloquent\Collection $productos_sub_categs
 *
 * @package App\Models
 */
class ProductosCateg extends Eloquent
{
	protected $table = 'productos_categ';
	protected $primaryKey = 'id_categ';
	public $timestamps = false;

	protected $casts = [
		'dvsor_grp_b'  => 'float',
		'dvsor_grp_b1' => 'float',
		'inactivo'     => 'bool'
	];

	protected $fillable = [
		'nom_categ',
		'dvsor_grp_b',
		'dvsor_grp_b1',
		'inactivo'
	];

	public function productos_sub_categs()
	{
		return $this->hasMany(\App\Models\ProductosSubCateg::class, 'id_categ');
	}
}
