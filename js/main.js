function checkboxCtrl(checkbox, base, a_afficher) {
  // Get the checkbox
  var checkBox = document.querySelector(checkbox);
  // Get the output text
  
  var paddingnormal = document.querySelector(base);

  var text = document.querySelector(a_afficher);
  if (checkBox.checked == true){
      text.style.display = "block";
      paddingnormal.style.display = "none";
    } else {
      text.style.display = "none";
      paddingnormal.style.display = "block";
 }
}

function checkboxSurvol() {
    // Get the checkbox
    var checkBox = document.querySelector("#activerSurvol");

    // Get the output text
    var text = document.querySelector("#survol");
    if (checkBox.checked == true){
        text.style.display = "block";

      } else {
        text.style.display = "none";
 }
}

(function ($) {

    'use strict';

    $(document).ready(function () {

        // Init here.
        var $body = $('body'),
            $main = $('#main'),
            $site = $('html, body'),
            transition = 'fade',
            smoothState;

        smoothState = $main.smoothState({
            onBefore: function($anchor, $container) {
                var current = $('[data-viewport]').first().data('viewport'),
                    target = $anchor.data('target');
                current = current ? current : 0;
                target = target ? target : 0;
                if (current === target) {
                    transition = 'fade';
                } else if (current < target) {
                    transition = 'moveright';
                } else {
                    transition = 'moveleft';
                }
            },
            onStart: {
                duration: 400,
                render: function (url, $container) {
                    $main.attr('data-transition', transition);
                    $main.addClass('is-exiting');
                    $site.animate({scrollTop: 0});
                }
            },
            onReady: {
                duration: 0,
                render: function ($container, $newContent) {
                    $container.html($newContent);
                    $container.removeClass('is-exiting');
                }
            },
        }).data('smoothState');

    });

}(jQuery));

checkboxCtrl('#pasPareilP','#paddingBase', '#paddingAvance' );
checkboxCtrl('#pasPareilM', '#marginBase', '#marginAvance');
checkboxCtrl('#pasPareilPS', '#paddingBaseS', '#paddingAvanceS');
checkboxCtrl('#pasPareilMS', '#marginBaseS', '#marginAvanceS');

checkboxSurvol();

