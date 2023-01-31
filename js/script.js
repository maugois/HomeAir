var meuSite = angular.module('meuSite', []);
// Começo header

// Fim header



// Começo filtro
meuSite.controller('filtro', function($scope) {
    $scope.exibir = false;
    $scope.todosAr = function() {
        $scope.exibir = true;
    }
    $scope.inverterAr = function () {
        $scope.exibir = false;
    }
    $scope.multiSplit = function () {
        $scope.exibir = false;
    }
    $scope.energiaSolar = function () {
        $scope.exibir = false;
    }
});
// FIm filtro