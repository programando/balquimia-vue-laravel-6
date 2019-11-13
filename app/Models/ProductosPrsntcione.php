<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 20:41:44 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

 class ProductosPrsntcione extends Eloquent

 {
	protected $primaryKey = 'id_prd';
	public $timestamps = false;

	protected $casts = [
		'id_prd_ppal'       => 'int',
		'id_present'        => 'int',
		'id_linea'          => 'int',
		'id_comis'          => 'int',
		'id_sub_categ'      => 'int',
		'cls_prd'           => 'int',
		'costo'             => 'float',
		'margen'            => 'float',
		'peso_grm'          => 'float',
		'peso_kg'           => 'float',
		'lsta_prcio'        => 'bool',
		'vr_vta_lsta_prcio' => 'float',
		'vr_vta'            => 'float',
		'vr_vta_web'        => 'float',
		'vr_mcdo_con_iva'   => 'float',
		'prd_fbrcdo'        => 'bool',
		'adm_kardex'        => 'bool',
		'es_kit'            => 'bool',
		'en_oferta'         => 'bool',
		'es_combo'          => 'bool',
		'dvsor_precio'      => 'float',
		'aplica_tron'       => 'bool',
		'ver_web_tron'      => 'bool',
		'cobro_flete'       => 'bool',
		'inactivo'          => 'bool'
	];

	protected $fillable = [
		'id_prd_ppal',
		'id_present',
		'id_linea',
		'id_comis',
		'id_sub_categ',
		'cls_prd',
		'costo',
		'margen',
		'peso_grm',
		'peso_kg',
		'frgncia',
		'lsta_prcio',
		'vr_vta_lsta_prcio',
		'vr_vta',
		'vr_vta_web',
		'vr_mcdo_con_iva',
		'prd_fbrcdo',
		'adm_kardex',
		'es_kit',
		'en_oferta',
		'es_combo',
		'dvsor_precio',
		'aplica_tron',
		'ver_web_tron',
		'ver_web_balq',
		'cobro_flete',
		'descrip_tron',
		'descrip_balq',
		'tags_bsqda',
		'inactivo'
	];

	public function mstro_comisiones_prd()
	{
		return $this->belongsTo(\App\Models\MstroComisionesPrd::class, 'id_comis');
	}

	public function mstro_linea()
	{
		return $this->belongsTo(\App\Models\MstroLinea::class, 'id_linea');
	}

	public function producto()
	{
		return $this->belongsTo(\App\Models\Producto::class, 'id_prd_ppal');
	}

	public function mstro_prsntcione()
	{
		return $this->belongsTo(\App\Models\MstroPrsntcione::class, 'id_present');
	}

	public function productos_sub_categ()
	{
		return $this->belongsTo(\App\Models\ProductosSubCateg::class, 'id_sub_categ');
	}

	public function facturas_dts()
	{
		return $this->hasMany(\App\Models\FacturasDt::class, 'id_prd');
	}

	public function pedidos_dts()
	{
		return $this->hasMany(\App\Models\PedidosDt::class, 'id_prd');
	}
}
