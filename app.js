var app = angular.module("myApp", ["ngRoute"]); 
app.config(function($routeProvider) {
    $routeProvider

    .when("/", {
        templateUrl : 'pages/home.php',
        controller  : 'HomeCtrl'
    })

    .when("/Search", {
    templateUrl : "pages/Search.php",
    controller  : 'SearchCtrl'	
    })

    .when("/Edit", {
        templateUrl : "pages/Edit.php",
        controller  : 'EditCtrl'		
    })

    .when("/Add", {
        templateUrl : "pages/Add.php",
        controller  : 'AddCtrl'	
    })

    .when("/Delete", {
        templateUrl : "pages/Delete.php",
        controller  : 'DeleteCtrl'		
    })

    .when("/Show", {
        templateUrl : "pages/Show.php",
        controller  : 'ShowCtrl'	
    })

    .otherwise({redirectTo: '/'});

    // controller 
    app.controller('HomeCtrl', function($scope) {
    });

    app.controller('SearchCtrl', function($scope) {
    });

    app.controller('EditCtrl', function($scope) {
    });

    app.controller('AddCtrl', function($scope) {
    });

    app.controller('DeleteCtrl', function($scope) {
    });

});