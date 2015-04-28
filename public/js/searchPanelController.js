/**
 * Created by pieterm on 23/04/15.
 */
app.controller('searchPanelController',['$scope','$window','$http',function($scope,$window,$http){
    $scope.currentparking=null;
    $scope.resparking=null;
    //console.log('test');
    $http.get('http://datatank.gent.be/Mobiliteitsbedrijf/Parkings11.json').success(function(response){
        //$scope.parkings = response.Parkings11.parkings;
        var arr=$.map(response.Parkings11.parkings,function(el){return el;});
        arr.sort(function(a,b){
            return (a["name"] > b["name"]) ? 1 : ((a["name"] < b["name"]) ? -1 : 0);
        });
        $scope.parkings=arr;
    });
    $scope.clickparking=function(parking){
        $scope.currentparking= parking;
        $scope.resparking=null;
    }
    $scope.resetparking=function(){
        $scope.currentparking=null;
        $scope.resparking=null;
    }
    $scope.reserveparking=function(parking){
        $http.get('../public/getLicensePlates').success(function(response){
            $scope.licenses=response;
        });
        $scope.currentparking=null;
        $scope.resparking=parking;
    }
    $scope.bookspot=function(){
        var booklicenseid = $("#booklicenseid").val();
        var bookdate = $('#bookdate').val();
        $http.post('../public/bookSpot',{parking:$scope.resparking,booklicenseid:booklicenseid,bookdate:bookdate}).success(function(){
            //alert('succes');
        });
    }
    $scope.updateparkings=function(){
        $http.get('http://datatank.gent.be/Mobiliteitsbedrijf/Parkings11.json').success(function(response){
            //$scope.parkings = response.Parkings11.parkings;
            var arr=$.map(response.Parkings11.parkings,function(el){return el;});
            arr.sort(function(a,b){
                return (a["name"] > b["name"]) ? 1 : ((a["name"] < b["name"]) ? -1 : 0);
            });
            $scope.parkings=arr;
        });
    }
}]);
