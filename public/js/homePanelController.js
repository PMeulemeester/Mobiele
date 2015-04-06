/**
 * Created by pieterm on 2/04/15.
 */
app.controller('homePanelController',['$scope','$window','$http',function($scope,$window,$http){
    $scope.naam = "Mobiele app";
    //console.log('test');
    $http.get('http://datatank.gent.be/Mobiliteitsbedrijf/Parkings11.json').success(function(response){
        $scope.parkings=response.Parkings11.parkings;
        console.log(response.Parkings11);
    });
}]);