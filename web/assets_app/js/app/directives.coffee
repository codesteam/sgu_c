angular.module('SgucApp').directive 'ngDataTable', ->
  restrict: 'A'
  scope:
    ngColFilters: '='
  link: (scope, element, attrs) ->
    element.dataTable
      iDisplayLength: 50,
      language: 
        url: '/assets_app/js/jquery.datatables-ru.json'
      order:
        [ 0, "desc" ]
      columnDefs: [
        { orderable: false, targets: [-1, -2, -3] }
      ]
      initComplete: ->
        filters   = scope.ngColFilters
        table_obj = @
        table_obj.api().columns().every ->
          column = @
          column_index = column.index()
          return if (typeof filters[column_index] == 'undefined')
          
          filter_column = $(table_obj).find('.table-filters th:eq('+column_index+')')
          select = $('<select><option value="">'+filters[column_index]['title']+'</option></select>')
            .appendTo( filter_column.empty() )
            .on 'change', ->
               val = $.fn.dataTable.util.escapeRegex($(@).val())
               column.search( val ? '^'+val+'$' : '', true, false ).draw();

          for d in filters[column_index]['values']
            select.append( '<option value="'+d+'">'+d+'</option>' )