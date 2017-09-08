app.controller('AdminController', function($scope,$http){
 
  $scope.pools = [];
   
});
/* app.controller('UserController',function(dataFactory,$scope,$http){
	
	var path = '/mynew/';
	$scope.data = [];
    dataFactory.httpRequest(path+'section1?search='+$scope.searchText+'&page='+pageNumber).then(function(data) {
		$scope.data = data.data;
		$scope.totalItems = data.total;
		$scope.pageNumber = pageNumber;
    });
	
}); */