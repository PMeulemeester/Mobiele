/**
 * Created by pieterm on 2/04/15.
 */
var app=angular.module('groep8mobiele',['ngRoute']);

app.config(function ($routeProvider){
    $routeProvider.when('/test1',{
        controller:"homePanelController",
       templateUrl: "views/test.blade.php"
    });
    $routeProvider.when('/test2',{
        template: "<p>hallo2</p>"
    });
});

function AppController($scope){

}