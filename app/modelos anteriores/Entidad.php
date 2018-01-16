<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_entidad';

    protected $primaryKey="ent_id";
	protected $fillable = ['ent_ruc','ent_rz','ent_dir','ent_tipo','ent_tel','ent_cont','ent_ctel','ent_dpto'];

	public function comprobantes(){
		return $this->hasMany('Binario\Comprobante');
	}
}
