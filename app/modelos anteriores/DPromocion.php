<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class DPromocion extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_dpromocion';

    protected $primaryKey="dprod_id";
	protected $fillable = ['dprod_cant','prom_id','prod_id'];

	public function producto(){
		return $this->belongsTo('Binario\Producto','prod_id');
	}
	public function promocion(){
		return $this->belongsTo('Binario\Promocion','prom_id');
	}
}
