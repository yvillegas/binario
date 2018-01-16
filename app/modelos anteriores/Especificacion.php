<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Especificacion extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_especificacion';

    protected $primaryKey="esp_id";
	protected $fillable = ['esp_desc','esp_abrev','esp_obs','cesp_id'];

	public function despecificaciones(){
		return $this->hasMany('Binario\DEspecificacion');
	}
	public function cespecificacion(){
		return $this->belongsTo('Binario\CEspecificacion','cesp_id');
	}
}
