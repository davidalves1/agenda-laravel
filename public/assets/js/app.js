$app = angular.module('agenda-app', []);

$app.controller('headerCtrl', function ($scope) {
    $scope.nome = 'David';
});

$app.controller('homeCtrl', function ($scope) {
    //
});

$('#calendario').datepicker({
    format: "dd/mm/yyyy",
    todayBtn: true,
    todayHighlight: true
});
$('#calendario').on("changeDate", function() {
    $('#data_selecionada').val(
        $('#calendario').datepicker('getFormattedDate')
    );
    swal({
        title: 'Datas',
        text: 'Data selecionada: ' + $('#data_selecionada').val()
    });
});
