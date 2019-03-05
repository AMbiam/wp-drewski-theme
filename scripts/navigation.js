var app = angular.module("myApp", ['ngAnimate']);

app.directive("navigate", function(){
	return{
		restrict: "E",
		controller: function ($scope, $element,$compile){
			$scope.pages = [];
			$scope.pagesL1 = [];
			$scope.pagesL2 = [];
			$scope.pagesL3 = [];
			$scope.pageNav = [
				{
					id: 0,
					parentId: 0,
					dName: "Some Text",
					url: "www.google.com"
				}
			];

			$scope.add = function(){
				$scope.pagesL1 = $scope.pages;
				$scope.pagesL2 = $scope.pages;
				$scope.pagesL3 = $scope.pages;
			}

			$scope.display1 = function(){
				$scope.clear3();
				$scope.clear2();
				$scope.clear1();
				angular.forEach($scope.pages, function(value, key){
					if(value.parentId == 0){
						$scope.pagesL1.push(value);
					}
				});
			}

			$scope.display2 = function(parent){
				$scope.clear3();
				$scope.clear2();
				$scope.clear1();
				angular.forEach($scope.pages, function(value, key){
					if(value.parentId == parent){
						$scope.pagesL2.push(value);
					}

					if(value.id == parent){
						$scope.pagesL1.push(value);
					}
				});
			}

			$scope.display3 = function(parent){
				$scope.clear3();
				$scope.clear2();
				angular.forEach($scope.pages, function(value, key){
					if(value.parentId == parent){
						$scope.pagesL3.push(value);
					}
					if(value.id == parent){
						$scope.pagesL2.push(value);
					}
				});
			}

			$scope.clear1 = function(){ $scope.pagesL1 = []; }
			$scope.clear2 = function(){ $scope.pagesL2 = []; }
			$scope.clear3 = function(){ $scope.pagesL3 = []; }


			/*$scope.add = function (id,parentId,displayName,url){
				//No more than 7 items in the array.
				var item = {
					id: id,
					parentId: parentId,
					displayName: displayName,
					url: url
				};

				$scope.pageNav.push(item);

				console.log($scope.pageNav);
			}*/
		}
	};
});