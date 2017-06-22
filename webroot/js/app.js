var app = angular.module("userApp",["ngRoute"]);

app.constant("urls",{
    webroot:webroot
});

app.controller("userCtrl",function($scope,$http,urls){
    var url = urls.webroot+"users/info";
    $http.get(url)
    .then(function(response) {
        $scope.user = response.data;
    });
    
});