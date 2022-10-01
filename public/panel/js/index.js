$('#userMenu').click(function(){

    if($('.userMenu').hasClass('active')){
        $('.userMenu').removeClass('active')

    }
    else{
        $('.userMenu').addClass('active')
    }
})


$("#sidebar .menu > li >ul").prev('a').children('i.fa-caret-right').css('display','block');

//menüyü küçültme ve büyütme
const mainTag = $("body > main");
$("#menu-bar-icon").click(()=>{
    mainTag.toggleClass("close-menu");
});

//menü açılma ve kapanma
$("#sidebar .menu > li >a").on('click', e => {
    if($(e.currentTarget.parentElement).attr('class') === 'active'){
        $(e.currentTarget.parentElement).removeClass('active');
        $(e.currentTarget).next('ul').slideUp(300);
    }
    else{
        $("#sidebar .menu > li").removeClass('active');
        $("#sidebar .menu > li >a+ul").slideUp(300);
        $(e.currentTarget.parentElement).addClass('active');
        $(e.currentTarget).next('ul').slideDown(300);
    }
});



$('.fa-bars').click(function(){
    if($('#sidebar').hasClass('responsive')){
        $('#sidebar').removeClass('responsive')
        $('header').removeClass('responsive')
        $('main').removeClass('responsive')
    }
    else{
        $('#sidebar').addClass('responsive')
        $('header').addClass('responsive')
        $('main').addClass('responsive')
        $("#sidebar aside ul.menu li ul").css('display','none');
        $("#sidebar .menu > li").removeClass('active');
    }
})
$('#sidebar').click(function(){
    if($(window).width() > 1350) {
        $('#sidebar').removeClass('responsive')
        $('header').removeClass('responsive')
        $('main').removeClass('responsive')
    }
})


$('.headerLogo .fa-times').click(function (){

    $('#sidebar').addClass('responsive')
    $('header').addClass('responsive')
    $('main').addClass('responsive')
    $("#sidebar aside ul.menu li ul").css('display','none');
    $("#sidebar .menu > li").removeClass('active');
})
if($(window).width() < 1350){
    $('#sidebar').addClass('responsive')
    $('header').addClass('responsive')
    $('main').addClass('responsive')
    $("#sidebar aside ul.menu li ul").css('display','none');
    $("#sidebar .menu > li").removeClass('active');
}

