<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_vendedor';

    protected $primaryKey="vend_id";
	protected $fillable = ['vend_dni','vend_nom','vend_tipo','vend_tel','vend_dpto','vend_obs'];

	public function comprobantes(){
		return $this->hasMany('Binario\Comprobante');
	}
}
