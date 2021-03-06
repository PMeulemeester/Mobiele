<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function licenses(){
		return $this->hasMany("App\user_cars");
	}
/*
    public function friends(){
        return $this->belongsToMany('App\User','friends','user_id','friend_id');
    }
*/
    public function friendshipsSent(){
        return $this->belongsToMany('App\User','friends','user_id','friend_id');
    }

    public function friendshipsReceived(){
       // return $this->belongsToMany('App\User','friends','friend_id','user_id');
        return $this->belongsToMany('App\User','friends','friend_id','user_id');
    }

    /**
     * filtert de opgegeven $users zodat enkel nog die gebruikers overschieten
     * waarnaar geen vriendschapsverzoeken zijn gestuurd door deze gebruiker
     * @param $id
     */
    public function notFriendshipSentTo($users){
        $friendshipsSent = $this->friendshipsSent;

       foreach($users as $user){
            if($friendshipsSent->contains($user)){
                $users->forget($user->id);
                dd($user);
            }
        }
    }

}
