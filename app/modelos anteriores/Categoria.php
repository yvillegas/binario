<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_categoria';

    protected $primaryKey="cat_id";
	protected $fillable = ['cat_desc','cat_obs'];

	public function productos(){
		return $this->hasMany('Binario\Producto');
	}
}
