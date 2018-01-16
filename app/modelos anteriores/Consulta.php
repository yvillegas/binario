<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_consulta';

    protected $primaryKey="cons_id";
	protected $fillable = ['cons_nom','cons_número','cons_email','cons_fecha','cons_obs'];

}
