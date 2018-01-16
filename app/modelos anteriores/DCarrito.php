<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class DCarrito extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_dcarrito';

    protected $primaryKey="dcarro_id";
	protected $fillable = ['dcarro_cant','carro_id','prod_id'];

	public function carrito(){
		return $this->belongsTo('Binario\Carrito','carro_id');
	}

	public function producto(){
		return $this->belongsTo('Binario\Producto','prod_id');
	}
}
