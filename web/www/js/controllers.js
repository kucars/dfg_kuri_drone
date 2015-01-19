angular.module('starter.controllers', [])

.controller('MapCtrl', function($scope) {})

.controller('rawCtrl', function($scope) {
})
.controller('processedCtrl', function($scope) {

})

.controller('ChatDetailCtrl', function($scope, $stateParams, Chats) {
  $scope.chat = Chats.get($stateParams.chatId);
})

.controller('ImagesCtrl', function($scope, Friends) {
  $scope.friends = Friends.all();
})

.controller('ViolationsCtrl', function($scope, $stateParams, Friends) {
})

.controller('ReadingsCtrl', function($scope) {
  $scope.settings = {
    enableFriends: true
  };
});
