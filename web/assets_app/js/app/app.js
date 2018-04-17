(function() {
  angular.module('SgucApp', []);

}).call(this);

$(document).ready(function(){
    $('.news-read-mode').on('click', function() {
        $('.news-read-mode').hide();
        $('.news-read-mode-content').removeClass('hidden');
    })
    $('.news-read-hide').on('click', function() {
        $('.news-read-mode').show();
        $('.news-read-mode-content').addClass('hidden');
    })
})
