<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class DEspecificacion extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_despecificacion';

    protected $primaryKey="desp_id";
	protected $fillable = ['prod_id','esp_id','desp_valor'];

	public function producto(){
		return $this->belongsTo('Binario\Producto','prod_id');
	}
	public function especificacion(){
		return $this->belongsTo('Binario\Especificacion','esp_id');
	}
}
