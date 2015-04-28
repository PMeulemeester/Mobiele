/**
 * Created by pieterm on 23/04/15.
 */
app.controller('friendsPanelController',['$scope','$window','$http',function($scope,$window,$http){
    $scope.naam = "Mobiele app - Friends";
    //console.log('test');
    $http.get('../public/friends').success(function(response){
        $scope.friends=response;
        console.log(response);
    });


    $http.get('../public/friends/sent').success(function(response){
        $scope.sent=response;
        console.log(response);
    });


    $http.get('../public/friends/received').success(function(response){
        $scope.received=response;
        console.log(response);
    });
}]);