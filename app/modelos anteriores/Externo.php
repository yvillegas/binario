<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Externo extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_externo';

    protected $primaryKey="ext_id";
	protected $fillable = ['ext_comp','ext_ruc','ext_rz','ext_tipo','ext_fecha','ext_guia','ext_moneda','ext_tipcambio','ext_subt','ext_tot','ext_igv','vend_id','ext_tipgasto'];
	public function vendedor(){
		return $this->hasOne('Binario\Vendedor');
	}
	public function dexternos(){
		return $this->hasMany('Binario\DExterno');
	}
}
