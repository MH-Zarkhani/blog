// sidebar collapse in large screen
let width = $(window).width();
if ((width >= 768  )) {
    $('.sidebar-toggle').on('click',function () {
        $('body').toggleClass('sidebar-collapse');
    });
}
else {
    // sidebar open and close in small screen
    $('.sidebar-toggle').on('click',function () {
        $('body').toggleClass('sidebar-open');
    });
}
