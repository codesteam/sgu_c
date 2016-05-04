(function() {
  var SiteApplicationCtrl;

  angular.module('SgucApp').controller('SiteApplicationCtrl', SiteApplicationCtrl = (function() {
    SiteApplicationCtrl.$inject = ['$scope', '$http'];

    function SiteApplicationCtrl(scope, http) {
      var ctrl;
      this.scope = scope;
      this.http = http;
      this.scope.ctrl = this;
      this.scope.report = true;
      this.scope.members_count = 1;
      this.scope.members = [];
      ctrl = this;
      this.scope.$watch("members_count", function(new_value, old_value) {
        var i, members, num, ref;
        members = [];
        if (new_value > 1) {
          for (num = i = 1, ref = new_value - 1; 1 <= ref ? i <= ref : i >= ref; num = 1 <= ref ? ++i : --i) {
            if (ctrl.scope.members[num - 2]) {
              members.unshift(ctrl.scope.members[num - 2]);
            } else {
              members.unshift({});
            }
          }
        }
        return ctrl.scope.members = members;
      });
    }

    return SiteApplicationCtrl;

  })());

}).call(this);
