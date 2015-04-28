/**
 * Created by pieterm on 23/04/15.
 */
app.controller('bookingsPanelController',['$scope','$window','$http',function($scope,$window,$http){
    $scope.naam = "Mobiele app - Bookings";
    //console.log('test');
    $http.get('../public/bookings').success(function(response){
        var arr=$.map(response.bookings,function(el){return el;});
        arr.sort(function(a,b){
            return (a["reservation"] > b["reservation"]) ? 1 : ((a["reservation"] < b["reservation"]) ? -1 : 0);
        });
        $scope.bookings=arr;
    });

}]);