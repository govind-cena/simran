 app.config(function($routeProvider,urls) {
 $routeProvider
  .when("/my_account", {
    templateUrl : urls.webroot+"users/index",
    controller:'userCtrl'
  })
  .when("/my_orders", {
    templateUrl : urls.webroot+"users/orders"
  });
});