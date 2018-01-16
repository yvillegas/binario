<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_operacion';

    protected $primaryKey="ope_id";
	protected $fillable = ['ope_tipo','comp_id','ext_id'];
	public function comprobante(){
		return $this->belongsTo('Binario\Comprobante','comp_id');
	}
	public function externo(){
		return $this->belongsTo('Binario\Externo','ext_id');
	}
}
