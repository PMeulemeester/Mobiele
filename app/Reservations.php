<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Reservations extends Model{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reservations';

	protected $fillable=['carpark','reservation','user_car_id'];

	public function user_car(){
		return $this->belongsTo("App\user_cars");
	}
}
