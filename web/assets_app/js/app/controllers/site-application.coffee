angular.module('SgucApp').controller 'SiteApplicationCtrl', class SiteApplicationCtrl
  @$inject: ['$scope', '$http']

  constructor: (@scope, @http) ->
    @scope.ctrl          = @
    @scope.report        = true
    @scope.members_count = 1
    @scope.members       = []

    ctrl = @

    @scope.$watch "members_count", (new_value, old_value) ->
      members = []
      if new_value > 1
        for num in [1..new_value-1]
          if ctrl.scope.members[num - 2]
            members.unshift ctrl.scope.members[num - 2]
          else
            members.unshift {}
      ctrl.scope.members = members
