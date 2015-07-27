angular.module('SgucApp').directive 'ngDataTable', ->
  restrict: 'A'
  link: (scope, element, attrs) ->
    element.dataTable
      iDisplayLength: 50,
      language: 
        url: '/assets_app/js/jquery.datatables-ru.json'
      order:
        [ 0, "desc" ]
      columnDefs: [
        { orderable: false, targets: [-1, -2] }
      ]
