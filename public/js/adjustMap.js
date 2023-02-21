$(window).on('load', function (){
    let map = $('.map');

    adjustMapWidth(map);

    $(window).on('resize', function (){
        adjustMapWidth(map);
    });
});

function adjustMapWidth(map){
    map.css('height', map.width() * .6)
}
