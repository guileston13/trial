var base_url = window.location.protocol + "//" + window.location.host + "/";
var app = angular.module("starter", []);

app.controller("alertCtrl", function($scope, $http) {
	console.log("HEl");

	// console.log($scope.nrs);

	// var ls_account_id = "";
	//  $http({
	//                     method  : 'POST',
	//                      url   : 'http://localhost/ustp_dtr/index.php/Welcome/CreCre/'+ls_account_id,
	//                      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
	//            }).then(function(image){
	//             // location.reload();
	//             $scope.image = image['data'][0];

	//       });

	$http({
		method: "POST",
		url: "http://localhost/ustp_dtr/index.php/Angular/display_search",
		headers: { "Content-Type": "application/x-www-form-urlencoded" }
	}).then(function(results) {
		// location.reload();
		$scope.res = results["data"][0];
		console.log($scope.res);
	});

	$scope.search_people = function(x) {
		var ls_account_id = x;
		window.location.href =
			base_url +
			"ustp_dtr" +
			"/" +
			"index.php" +
			"/" +
			"Welcome" +
			"/" +
			"RegularView_admin/" +
			ls_account_id;

		//    var ls_account_id = x
		// $http({
		//                     method  : 'POST',
		//                      url   : 'http://localhost/regular/index.php/Welcome/search_people/'+ls_account_id,
		//                      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		//            }).then(function(image){
		//             // location.reload();
		//             $scope.image = image['data'][0];
		//             // console.log($scope.image);
		//             console.log("upps");
		//       });
	};

	$scope.search_plus_people = function(x) {
		var ls_account_id = x;
		$http({
			method: "POST",
			url:
				"http://localhost/regular/index.php/Welcome/search_plus_people/" +
				ls_account_id,
			headers: { "Content-Type": "application/x-www-form-urlencoded" }
		}).then(function(image) {
			// location.reload();
			$scope.image = image["data"][0];
			console.log($scope.image);
		});
	};

	$scope.edit_peza = function(x) {
		var ls_account_id = x;
		window.location.href =
			base_url +
			"regular" +
			"/" +
			"index.php" +
			"/" +
			"Welcome" +
			"/" +
			"edit_peza/" +
			ls_account_id;
	};

	$scope.claim = function(x) {
		console.log(x);
		console.log("HELL");
		var ls_account_id = x;
		$http({
			method: "POST",
			url: "http://localhost/regular/index.php/Welcome/claim/" + ls_account_id,
			headers: { "Content-Type": "application/x-www-form-urlencoded" }
		}).then(function(res) {
			swal(
				{
					title: "Success!",
					text: "You have successfully Claim!",
					type: "success",

					confirmButtonColor: "#3085d6"
				},
				function() {
					$http({
						method: "POST",
						url: "http://localhost/regular/index.php/Welcome/display_search/",
						headers: { "Content-Type": "application/x-www-form-urlencoded" }
					}).then(function(res) {
						// location.reload();
						$scope.res = res["data"][0];
					});
				}
			);
		});
	};

	$scope.renew_advance_setting = function(x) {
		var ls_acc = x;
		$scope.renew_advance = [];
		$scope.renew_advance = x;
		console.log($scope.renew_advance);
	};

	$scope.renew_date = function(x) {
		var ls_account_id = x;
		$http({
			method: "POST",
			url:
				"http://localhost/regular/index.php/Welcome/renew_date/" +
				ls_account_id,
			headers: { "Content-Type": "application/x-www-form-urlencoded" }
		}).then(function(res) {
			swal(
				{
					title: "Success!",
					text: "You have successfully Renew!",
					type: "success",

					confirmButtonColor: "#3085d6"
				},
				function() {
					$http({
						method: "POST",
						url: "http://localhost/regular/index.php/Welcome/display_search/",
						headers: { "Content-Type": "application/x-www-form-urlencoded" }
					}).then(function(res) {
						// location.reload();
						$scope.res = res["data"][0];
					});
				}
			);
		});
	};
});
