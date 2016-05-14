<!DOCTYPE html>
<html lang="en-US">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>



<div ng-app="myApp" ng-controller="myCtrl">
<label>Enter Email Id</label>
<input type="email" name="email" ng-model="request.email" required/>

</div>

<script>

var app = angular.module("myApp", []);

app.controller("myCtrl", function($scope) {
   
});

</script>

</body>
</html>