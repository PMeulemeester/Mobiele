<?php namespace App\Http\Controllers;

use App\Reservations;
use App\User;
use App\user_cars;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Psy\Util\Json;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

	public function getLicPlates()
	{
		return Auth::user()->licenses;
	}

	public function bookings()
	{
		$bookings=array();
		foreach(Auth::user()->licenses as $license)
		{
			$user_car=user_cars::find($license->id);
			$reservations=$user_car->reservations;
			if(count($reservations)!=0) {
				$res["license"]=$user_car->license;
				$res["data"]=$reservations;
				array_push($bookings, $reservations);
			}
		}
		$b["bookings"]=$bookings[0];
		return json_encode($b);
	}

	public function bookSpot(){
		$parking = Input::get('parking');
		$licenseid = Input::get('booklicenseid');
		$bookdate = Input::get('bookdate');
		Reservations::create([
			'carpark'=>$parking["description"],
			'reservation'=>Carbon::now(),
			'user_car_id'=>$licenseid
		]);
	}

}
