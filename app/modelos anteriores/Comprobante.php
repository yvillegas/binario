<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_comprobante';

    protected $primaryKey="comp_id";
	protected $fillable = [
	'comp_nro','comp_fecha','comp_est','comp_subt',
	'comp_igv','comp_tot','comp_saldo','comp_cond',
	'comp_tipcambio','comp_moneda','comp_guia','comp_tipo',
	'ent_id','vend_id','comp_fven','comp_fpago','comp_banco','comp_nope','comp_doc'];

	public function entidad(){
		return $this->belongsTo('Binario\Entidad','ent_id');
	}
	public function comprasncredito(){
		return $this->hasMany('Binario\CompraNCredito');
	}
	public function operacion(){
		return $this->hasOne('Binario\Operacion');
	}
	public function dcomprobantes(){
		return $this->hasMany('Binario\DComprobante');
	}
	public function notacredito(){
		return $this->hasOne('Binario\NotaCredito');
	}
	public function pagos(){
		return $this->hasMany('Binario\Pago');
	}
	public function vendedor(){
		return $this->belongsTo('Binario\Vendedor','vend_id');
	}
}
