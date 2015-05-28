angular.module('SgucApp').controller 'SiteApplicationCtrl', class SiteApplicationCtrl
  @$inject: ['$scope', '$http']

  constructor: (@scope, @http) ->
    @scope.ctrl    = @
    @scope.report  = false
    @scope.members = []

