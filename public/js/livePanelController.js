/**
 * Created by pieterm on 23/04/15.
 */
app.controller('livePanelController',['$scope','$window','$http',function($scope,$window,$http){
    $scope.naam = "Mobiele app - Live";
    //console.log('test');
    $http.get('http://datatank.gent.be/Mobiliteitsbedrijf/Parkings11.json').success(function(response){
        $scope.parkings=response.Parkings11.parkings;
        console.log(response.Parkings11);
    });
}]);