<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model {

	protected $table = 'movimiento';

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function tercero()
	{
		return $this->belongsTo('App\Tercero');
	}

	public function cilindro()
	{
		return $this->belongsTo('App\Cilindro');
	}

} #Movimiento
