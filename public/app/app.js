(function () {
    angular.module('fa.app',['ngStorage', 'ui.router', 'angular-jwt'])
        .controller('appCtrl', function($scope, $http, $localStorage, $location)
        {
        })
        .run(['$rootScope','$localStorage','jwtHelper', function($rootScope, $localStorage, jwtHelper)
        {
            $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
                var token = $localStorage.token;

                if (!token || jwtHelper.isTokenExpired(token)) {
                    window.location.href = window.location.origin + "/login";
                }
            });
        }])
        .config( function ( $stateProvider ) {

            $stateProvider.state( 'firstRoute', {
                url: '/firstRoute',
                templateUrl: 'app/api/items.tpl.html'
            });

            $stateProvider.state( 'secondRoute', {
                url: '/secondRoute',
                template: '<h1>Second Route</h1>'
            });

        });
}());