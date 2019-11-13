<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 12 Nov 2019 20:41:54 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

use DB;
class Producto extends Eloquent
{
	protected $primaryKey = 'id_prd_ppal';
	public $timestamps = false;

	protected $casts = [
		'id_cta_vta'      => 'int',
		'id_cta_inv'      => 'int',
		'id_tp_prd'       => 'int',
		'id_cls_dane_prd' => 'int',
		'id_med_cpra'     => 'int',
		'dnsdad'          => 'float',
		'mp_fbrcda'       => 'bool',
		'mp_ctrlda'       => 'bool',
		'prstmo'          => 'bool',
		'accsrio'         => 'bool',
		'inactivo'        => 'bool'
	];

	protected $fillable = [
		'clave',
		'id_cta_vta',
		'id_cta_inv',
		'id_tp_prd',
		'id_cls_dane_prd',
		'id_med_cpra',
		'nom_prd',
		'nom_faction',
		'tp_dspcho',
		'dnsdad',
		'mp_fbrcda',
		'mp_ctrlda',
		'prstmo',
		'accsrio',
		'inactivo'
	];

	public function mstro_dane_prd_grp()
	{
		return $this->belongsTo(\App\Models\MstroDanePrdGrp::class, 'id_cls_dane_prd');
	}

	public function mstro_ctas_puc()
	{
		return $this->belongsTo(\App\Models\MstroCtasPuc::class, 'id_cta_vta');
	}

	public function mstro_unds_medida()
	{
		return $this->belongsTo(\App\Models\MstroUndsMedida::class, 'id_med_cpra');
	}

	public function mstro_tps_prd()
	{
		return $this->belongsTo(\App\Models\MstroTpsPrd::class, 'id_tp_prd');
	}

	public function productos_prsntciones()
	{
		return $this->hasMany(\App\Models\ProductosPrsntcione::class, 'id_prd_ppal');
	}

	/*---------------------------------------------------------
				SCOPES
	---------------------------------------------------------*/
	public function scopemasVendidosUltimosSeisMeses(){
		return  DB::select('call inf_productos_mas_vendidos  ()' );
	}

}
