(function() {
  angular.module('SgucApp').directive('ngDataTable', function() {
    return {
      restrict: 'A',
      scope: {
        ngColFilters: '='
      },
      link: function(scope, element, attrs) {
        return element.dataTable({
          iDisplayLength: 50,
          language: {
            url: '/assets_app/js/jquery.datatables-ru.json'
          },
          order: [0, "desc"],
          columnDefs: [
            {
              orderable: false,
              targets: [-1, -2, -3]
            }
          ],
          initComplete: function() {
            var filters, table_obj;
            filters = scope.ngColFilters;
            table_obj = this;
            return table_obj.api().columns().every(function() {
              var column, column_index, d, filter_column, i, len, ref, results, select;
              column = this;
              column_index = column.index();
              if (typeof filters[column_index] === 'undefined') {
                return;
              }
              filter_column = $(table_obj).find('.table-filters th:eq(' + column_index + ')');
              select = $('<select><option value="">' + filters[column_index]['title'] + '</option></select>').appendTo(filter_column.empty()).on('change', function() {
                var val;
                val = $.fn.dataTable.util.escapeRegex($(this).val());
                return column.search(val != null ? val : '^' + val + {
                  '$': ''
                }, true, false).draw();
              });
              ref = filters[column_index]['values'];
              results = [];
              for (i = 0, len = ref.length; i < len; i++) {
                d = ref[i];
                results.push(select.append('<option value="' + d + '">' + d + '</option>'));
              }
              return results;
            });
          }
        });
      }
    };
  });

}).call(this);
