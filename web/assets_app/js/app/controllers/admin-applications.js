(function() {
  var AdminApplicationsCtrl;

  angular.module('SgucApp').controller('AdminApplicationsCtrl', AdminApplicationsCtrl = (function() {
    AdminApplicationsCtrl.$inject = ['$scope'];

    function AdminApplicationsCtrl(scope) {
      this.scope = scope;
      this.scope.ctrl = this;
      this.scope.filters = {
        5: {
          'title': 'Статус',
          'values': ['Черновик', 'Завершено', 'Отклонено']
        },
        6: {
          'title': 'Доклад',
          'values': ['Да', 'Нет']
        }
      };
    }

    return AdminApplicationsCtrl;

  })());

}).call(this);
