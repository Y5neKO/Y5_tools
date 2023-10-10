// PreLoading
var $preloader = $('#page-preloader');
if ($preloader) {
    $spinner = $preloader.find('.spinner-loader');
    $spinner.fadeOut();
    $preloader.delay(50).fadeOut('slow');
}

/* bootstrap dropdown hover menu */
if( screen.width > 768 ) {     
    $('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
      $(this).children('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
    }, function() {
      $(this).children('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
    });
}

/* tooltip */
$('[data-toggle="popover"]').on('click',
function() {
    var ele = $(this);
    ele.popover('show');
    setTimeout(function() {
        ele.popover('destroy');
    }, 500);
});

/* clear */
$('.clear').on('click', function() {
    var ele = $($(this).data('clearTarget'));
    $(ele).val("");
});

/* case change */
function lower(ele){
    var low = $(ele).val().toLowerCase();
    $(ele).val(low);
}

function upper(ele){
    var up = $(ele).val().toUpperCase();
    $(ele).val(up);
}
