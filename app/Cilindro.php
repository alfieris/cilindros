<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cilindro extends Model {

	protected $table = 'cilindros';

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function tercero()
	{
		return $this->belongsTo('App\Tercero');
	}

	public function movimientos()
	{
		return $this->hasMany('App\Movimiento');
	}

} #Cilindro
