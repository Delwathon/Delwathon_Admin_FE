var screenWidth = $(window).width();

$(window).resize(function() {
    screenWidth = $(window).width();
    checkResponsiveCondition(screenWidth);
});

function checkResponsiveCondition(width) {
    if (width < 1024) {
        $('.sidenav').hide()
        $('#exitico').show()
        $('#showbar').click(
            function() {
                $('.sidenav').show()
            }
        )
        $('#exitico').click(
            function(){
                $('.sidenav').hide()
            }
        )

    }else{
        $('.sidenav').show() 
        $('#exitico').hide()
    }
}

checkResponsiveCondition(screenWidth);
});