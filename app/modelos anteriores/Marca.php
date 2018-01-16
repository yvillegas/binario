<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_marca';

    protected $primaryKey="marca_id";
	protected $fillable = ['marca_desc','marca_obs'];

	public function productos(){
		return $this->hasMany('Binario\Producto');
	}
}
