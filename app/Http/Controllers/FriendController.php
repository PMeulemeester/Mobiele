<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class FriendController extends Controller {




    /**
     * lijst van gebruikers die jij toevoegde, maar die jou nog niet hebben toegevoegd
     */
    public function friendRequestsSent($user_id){
        return User::find($user_id)->friendshipsSent;
    }

    /**
     * lijst van vrienden die vriendschap nog moeten bevestigen
     */
    public function friendRequestsReceived($user_id){
        return User::find($user_id)->friendshipsReceived;
    }

    /**
     * lijst van vrienden: jij hebt hun toegevoegd en zij jou
     */
    public function friends($user_id){
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
    public function addFriend($user_id,$friend_id){
    dd("add friend");
    }

    /**
     * vriendschap in een richting verwijderen: verzoek intrekken
     * of vriendschap verbreken
     * @param $user_id
     * @param $friend_id
     */
    public function deleteFriend($user_id,$friend_id){
    dd("delete friend");
    }

}
