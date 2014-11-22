<?php

class Ad extends \Eloquent {
	protected $fillable = ['titulo','prioridad','contenido','imagen','descripcion'.'costo','tiempoPubli','user_id'];
	
	public function user()
	{
		return $this->belongsTo('User');
	}

}