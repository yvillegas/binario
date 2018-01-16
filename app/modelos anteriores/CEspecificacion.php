<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class CEspecificacion extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_cespecificacion';

    protected $primaryKey="cesp_id";
	protected $fillable = ['cesp_desc','cesp_abrev','cesp_obs'];

	public function especificaciones(){
		return $this->hasMany('Binario\Especificacion');
	}
}
