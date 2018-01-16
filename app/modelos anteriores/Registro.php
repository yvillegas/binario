<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_registro';

    protected $primaryKey="reg_id";
	protected $fillable = ['reg_fecha','reg_estado','reg_obs','carro_id'];

	public function carrito(){
		return $this->belongsTo('Binario\Carrito','carro_id');
	}
}
