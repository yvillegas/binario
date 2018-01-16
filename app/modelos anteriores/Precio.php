<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_precio';

    protected $primaryKey="prec_id";
	protected $fillable = ['prec_compra','prec_venta','prec_promo','prec_especial','prod_id'];

	public function producto(){
		return $this->belongsTo('Binario\Producto','prod_id');
	}
}
