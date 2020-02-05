var base_url = window.location.protocol + "//" + window.location.host + "/";
var app = angular.module("starter", []);

app.controller("alertCtrl", function ($scope, $http) {
	console.log("HEl");
	$http({
		method: "POST",
		url: "http://localhost/formgen/Manage_Subjects/subject_row/",
		headers: { "Content-Type": "application/x-www-form-urlencoded" }
	}).then(function (subject) {
		// location.reload();
		$scope.subject = subject["data"][0];
		// console.log($scope.image);
		//console.log($scope.subject);
	});

	$http({
		method: "POST",
		url: "http://localhost/formgen/Manage_Subjects/view_curriculum/",
		headers: { "Content-Type": "application/x-www-form-urlencoded" }
	}).then(function (curriculum) {
		$scope.curriculum = curriculum["data"][0];
		console.log($scope.curriculum);
	});

	$http({
		method: "POST",
		url: "http://localhost/formgen/Manage_Subjects/view_section/",
		headers: { "Content-Type": "application/x-www-form-urlencoded" }
	}).then(function (section) {
		$scope.section = section["data"][0];
		console.log($scope.section);
	});

	$http({
		method: "POST",
		url: "http://localhost/formgen/Manage_Students/AllStudent/",
		headers: { "Content-Type": "application/x-www-form-urlencoded" }
	}).then(function (student) {
		$scope.student = student["data"][0];
		console.log($scope.student);
	});
});
