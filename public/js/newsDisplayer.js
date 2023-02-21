$(window).on('load', function (){
    let contentBlock = $('.carousel-content-block .scrollable-content');
    let newsImages = $('.carousel-image-block img, .carousel-image-block video');
    let newsContents = $('.carousel-content-block .content');
    let currentNewIndex = 0;
    let time = 6000;

    setInterval(function (){
        swap()
    }, time);

    function swap(){
        contentBlock.append($(newsContents[currentNewIndex]));

        $(newsImages[currentNewIndex]).removeClass('current');

        currentNewIndex++;
        if(currentNewIndex+1 > newsImages.length) currentNewIndex = 0;

        $(newsImages[currentNewIndex]).addClass('current');
    }
});
