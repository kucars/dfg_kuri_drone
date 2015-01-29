angular.module('starter.controllers', [])

.controller('MapCtrl', function($scope) {
	$scope.init = function(){
		var mapCanvas = document.getElementById('map-canvas');
		var mapOptions = {
			center: new google.maps.LatLng(44.5403, -78.5463),
			zoom: 8,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(mapCanvas, mapOptions)
        //google.maps.event.addDomListener(window, 'load', initialize);
	}
	$scope.init();
})

.controller('rawCtrl', function($scope, $ionicModal) {

	  $ionicModal.fromTemplateUrl('raw.html', {
		  	  scope: $scope,
		  	  animation: 'slide-in-up'
		  	}).then(function (modal) {
		  	  $scope.modal = modal;
	});

	// function to open the modal Raw
	$scope.openModalR = function () {
	  $ionicModal.fromTemplateUrl('raw.html', {
	  	  scope: $scope,
	  	  animation: 'slide-in-up'
	  	}).then(function (modal) {
	  	  $scope.modal = modal;
	})
	  $scope.modal.show();
	};

	// function to open the modal Processed
	$scope.openModalP = function () {
	  $ionicModal.fromTemplateUrl('processed.html', {
	  	  scope: $scope,
	  	  animation: 'slide-in-up'
	  	}).then(function (modal) {
	  	  $scope.modal = modal;
	})
	$scope.modal.show();
	};

	// function to open the modal ir
	$scope.openModalI = function () {
	  $ionicModal.fromTemplateUrl('ir.html', {
		  scope: $scope,
		  animation: 'slide-in-up'
		}).then(function (modal) {
		  $scope.modal = modal;
	})
	$scope.modal.show();
	};

	// function to close the modal
	$scope.closeModal = function () {
	  $scope.modal.hide();
	  $scope.modal.remove();
	};

	//Cleanup the modal when we're done with it!
	$scope.$on('$destroy', function () {
	  $scope.modal.remove();
	});

})

.controller('ViolationsCtrl', function($scope, $ionicModal) {

	// array list which will contain the items added
	$scope.toDoListItems = [];

	//init the modal
	$ionicModal.fromTemplateUrl('modal.html', {
	  scope: $scope,
	  animation: 'slide-in-up'
	}).then(function (modal) {
	  $scope.modal = modal;
	});

	// function to open the modal
	$scope.openModal = function () {
	  $scope.modal.show();
	};

	// function to close the modal
	$scope.closeModal = function () {
	  $scope.modal.hide();
	};

	//Cleanup the modal when we're done with it!
	$scope.$on('$destroy', function () {
	  $scope.modal.remove();
	});

	//function to add items to the existing list
	$scope.AddItem = function (data) {
	  $scope.toDoListItems.push({
	    task: data.newItem,
	    status: 'not done'
	  });
	  data.newItem = '';
	  $scope.closeModal();
};
})

.controller('ReadingsCtrl', function($scope) {

});
