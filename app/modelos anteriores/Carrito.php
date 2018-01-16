<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_carrito';

    protected $primaryKey="carro_id";
	protected $fillable = ['usu_id'];

	public function usuario(){
		return $this->belongsTo('Binario\Usuario','usu_id');
	}
}
