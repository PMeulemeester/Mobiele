/**
 * Created by pieterm on 2/04/15.
 */
var app=angular.module('groep8mobiele',['ngRoute','snap','ui.bootstrap']);

app.config(function ($routeProvider){
    $routeProvider.when('/live',{
        controller:"livePanelController",
        templateUrl: "views/live.blade.php"
    });
    $routeProvider.when('/friends',{
        controller:"friendsPanelController",
        templateUrl: "views/friends.blade.php"
    });
    $routeProvider.when('/search',{
        controller:"searchPanelController",
        templateUrl: "views/search.blade.php"
    });
    $routeProvider.when('/settings',{
        controller:"settingsPanelController",
        templateUrl: "views/settings.blade.php"
    });
    $routeProvider.when('/bookings',{
        controller:"bookingsPanelController",
        templateUrl: "views/bookings.blade.php"
    });
});

    app.filter('clearBr', function () {
        return function (input) {
            if (input) {
                return input.replace(/<br>/gi,' ');
            }
        };
    });

function AppController($scope){

}

app.controller('AccordionDemoCtrl', function ($scope) {
    $scope.oneAtATime = true;

    $scope.groups = [
        {
            title: 'Dynamic Group Header - 1',
            content: 'Dynamic Group Body - 1'
        },
        {
            title: 'Dynamic Group Header - 2',
            content: 'Dynamic Group Body - 2'
        }
    ];

    $scope.items = ['Item 1', 'Item 2', 'Item 3'];

    $scope.addItem = function() {
        var newItemNo = $scope.items.length + 1;
        $scope.items.push('Item ' + newItemNo);
    };

    $scope.status = {
        isFirstOpen: true,
        isFirstDisabled: false
    };
});