var meuSite = angular.module('meuSite', []);
// Começo header
var headerTop = meuSite.offsetTop;
meuSite.controller('meuHeader', function($scope) {
    if (window.pageYOffset > headerTop) {
        $scope.classTop = 'header-top';
    } else {
        $scope.classTop = '';
    }
});
// Fim header