<?php namespace Binario;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 't_producto';

    protected $primaryKey="prod_id";
	protected $fillable = ['prod_cod','prod_desc','prod_cond','prod_obs','marca_id','cat_id'];

	public function categoria(){
		return $this->belongsTo('Binario\Categoria','cat_id');
	}
	public function marca(){
		return $this->belongsTo('Binario\Marca','marca_id');
	}
	public function despecificacion(){
		return $this->hasMany('Binario\DEspecificacion');
	}
	public function precio(){
		return $this->hasOne('Binario\Precio','prod_id');
	}
	public function inventario(){
		return $this->hasOne('Binario\Inventario','prod_id');
	}
	public function consultas(){
		return $this->hasMany('Binario\Consulta');
	}
	public function imagenes(){
		return $this->hasMany('Binario\Imagen');
	}
}
