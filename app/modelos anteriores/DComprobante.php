<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class DetalleComprobante extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_detallecomprobante';

    protected $primaryKey="dcomp_id";
	protected $fillable = ['dcomp_cant','dcomp_prec','comp_id','prod_id'];
	public function comprobante(){
		return $this->belongsTo('Binario\Comprobante','comp_id');
	}
	public function producto(){
		return $this->belongsTo('Binario\Producto','prod_id');
	}
}
