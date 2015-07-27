angular.module('SgucApp').controller 'AdminApplicationsCtrl', class AdminApplicationsCtrl
  @$inject: ['$scope']

  constructor: (@scope) ->
    @scope.ctrl    = @
    @scope.filters =
      5:
        'title': 'Статус'
        'values': [ 'Черновик', 'Завершено', 'Отклонено']
      6:
        'title': 'Доклад'
        'values': [ 'Да', 'Нет' ]
