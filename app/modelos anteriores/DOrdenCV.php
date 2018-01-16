<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class DetalleOrdenCV extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_detalleordencv';

    protected $primaryKey="docv_id";
	protected $fillable = ['docv_cant','docv_prec','ocv_id','prod_id'];
	public function ordencv(){
		return $this->belongsTo('Binario\OrdenCV','ocv_id');
	}
	public function producto(){
		return $this->belongsTo('Binario\Producto','prod_id');
	}
}
