/**
 * Created by pieterm on 23/04/15.
 */


app.controller('friendsPanelController',['$scope','$window','$http',function($scope,$window,$http){
    $scope.naam = "Mobiele app - Friends";
    $scope.noresults = "";
    //console.log('test');

    $scope.loadFriends = function(){
        $http.get('../public/friends').success(function(response){
            $scope.friends=response;
            console.log(response);
        });
    }

    $scope.loadReceived = function(){
        $http.get('../public/friends/received').success(function(response){
            $scope.received=response;
            console.log(response);
        });
    }


    $scope.loadSent = function(){
        $http.get('../public/friends/sent').success(function(response){
            $scope.sent=response;
            console.log(response);
        });
    }

    $scope.loadFriends();
    $scope.loadReceived();
    $scope.loadSent();

    $scope.addFriend=function(friend){
      //  window.alert("add " + friend.id);
        var id = friend.id;
        $http.get('../public/friends/add/' + id).success(function(response){
            $scope.loadFriends();
            $scope.loadReceived();
            $scope.loadSent();
            $scope.newFriends = {};
        });
    }
    $scope.removeFriend=function(friend){
      //  window.alert("delete " + friend.id);
        var id = friend.id;
        $http.get('../public/friends/del/' + id).success(function(response){
            $scope.loadFriends();
            $scope.loadReceived();
            $scope.loadSent();
        });
    }

    $scope.searchFriends=function(query){
        $http.get('../public/friends/search/' + query).success(function(response){
            $scope.newFriends = response;
            if(response.length==0) {
                $scope.noresults = "Geen resultaten gevonden, gelieve de zoekopdracht aan te passen";
            }else{
                $scope.noresults = "";
            }
            console.log(response);
            $scope.loadFriends();
            $scope.loadReceived();
            $scope.loadSent();
        });
    }


}]);