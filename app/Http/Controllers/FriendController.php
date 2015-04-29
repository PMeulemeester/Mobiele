<?php namespace App\Http\Controllers;

use App\Friendship;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller {




    /**
     * lijst van gebruikers die jij toevoegde, maar die jou nog niet hebben toegevoegd
     */
    public function friendRequestsSent(){
        $user_id = Auth::id();
        $sent =  User::find($user_id)->friendshipsSent;
        $received =  User::find($user_id)->friendshipsReceived;


        return $sent->except($received->modelKeys());
    }

    /**
     * lijst van vrienden die vriendschap nog moeten bevestigen
     */
    public function friendRequestsReceived(){
        $user_id = Auth::id();
        $received =  User::find($user_id)->friendshipsReceived;
        $sent =  User::find($user_id)->friendshipsSent;

        return $received->except($sent->modelKeys());
    }

    /**
     * lijst van vrienden: jij hebt hun toegevoegd en zij jou
     */
    public function friends(){
        $user_id = Auth::id();
        $to = User::find($user_id)->friendshipsSent;
        $from = User::find($user_id)->friendshipsReceived;
        return $to->intersect($from);
    }

    /**
     * voeg vriendschap in de ene richting toe, wordt gebruikt om zowel
     * een vriendschapsverzoek te accepteren als er een zenden.
     * @param $user_id
     * @param $friend_id
     */
    public function addFriend($friend_id){
        $user_id = Auth::id();
        $user = User::find($user_id);
        $user->friendshipsSent()->attach($friend_id);
    }

    /**
     * vriendschap in beide richting verwijderen: verzoek intrekken/weigeren
     * of vriendschap verbreken
     * @param $user_id
     * @param $friend_id
     */
    public function deleteFriend($friend_id){
        $user_id = Auth::id();
        $user = User::find($user_id);
        $user->friendshipsSent()->detach($friend_id);

        $friend = User::find($friend_id)->friendshipsSent()->detach($user_id);
    }

}
