<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_imagen';

    protected $primaryKey="img_id";
	protected $fillable = ['prod_id','img_url'];

	public function producto(){
		return $this->belongsTo('Binario\Producto','prod_id');
	}
}
