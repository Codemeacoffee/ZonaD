$(window).on('load', function (){
    let mainNavbar = $('#main-navbar');

    adjustNavigationBar(mainNavbar);

    $(window).scroll(function () {
        adjustNavigationBar(mainNavbar);
    });

    mainNavbar.on('show.bs.dropdown', function (){
        mainNavbar.addClass('dropdown-open');
    })

    mainNavbar.on('hide.bs.dropdown', function (){
        mainNavbar.removeClass('dropdown-open');
    })
});

function adjustNavigationBar(mainNavbar){
    let scroll = $(window).scrollTop();

    if(scroll > 50) mainNavbar.addClass('bg-black');
    else mainNavbar.removeClass('bg-black');
}
