<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_promocion';

    protected $primaryKey="prom_id";
	protected $fillable = ['prom_desc','prom_tot'];

	public function dpromociones(){
		return $this->hasMany('Binario\DPromociones');
	}
}
