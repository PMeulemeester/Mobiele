<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class user_cars extends Model{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_cars';

	public  $timestamps=false;

	public function user(){
		return $this->belongsTo("App\User");
	}
	public function reservations(){
		return $this->hasMany("App\Reservations","user_car_id");
	}
}
