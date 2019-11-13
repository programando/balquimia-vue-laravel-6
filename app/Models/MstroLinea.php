<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 01 Nov 2019 15:27:48 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;


class MstroLinea extends Eloquent
{
	protected $primaryKey = 'id_linea';
	public    $timestamps = false;
	protected $appends    = ['image_path', 'slider_path'];
	protected $casts      = [ 'orden_web' => 'int', 'inactivo' => 'bool' ];
	protected $fillable   = [ 'cod_linea', 'nom_linea',  'orden_web',  'dscrpcion_linea',  'img_linea',  'img_slider', 'img_path', 'inactivo' ];


  /*--------------------------------------
        SCOPES
   --------------------------------------*/
   public function scopeLineasActivas( $query){
		return $query
				->Where('inactivo','0')
				->where('id_linea', '>', 0)
				->where('id_linea', '<>', 8)
				->orderBy('orden_web')
				->get();
	}

	public function getImagePathAttribute() {
		return $this->img_path . $this->img_linea ;
	}
	public function getSliderPathAttribute() {
		return $this->img_path . $this->img_slider ;
	}


	public function mstro_lineas_sub_lineas_asocs()
	{
		return $this->hasMany(\App\Models\MstroLineasSubLineasAsoc::class, 'id_linea');
	}

	public function ProductosPresentaciones()
	{
		return $this->hasMany(\App\Models\ProductosPrsntcione::class, 'id_linea');
	}

	public function terceros()
	{
		return $this->hasMany(\App\Models\Tercero::class, 'vend_id_linea');
	}

	public function terceros_lineas_asocs()
	{
		return $this->hasMany(\App\Models\TercerosLineasAsoc::class, 'id_linea');
	}
}
