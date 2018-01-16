<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class DExterno extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_dexterno';

    protected $primaryKey="dext_id";
	protected $fillable = ['dext_desc','dext_cant','dext_prec','ext_id'];
	public function externo(){
		return $this->belongsTo('Binario\DExterno','ext_id');
	}
}
