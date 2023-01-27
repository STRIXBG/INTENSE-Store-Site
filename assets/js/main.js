/* G Translate */
var gTimer = null;

$( window ).scroll(function() {
    if(gTimer === null){
        if ($(this).scrollTop() > 70) {
            $('.gtranslate_wrapper').fadeIn('slow').css('display', 'block');
        } else {
            $('.gtranslate_wrapper').fadeOut('slow').css('display', 'none');
            gTimer = setTimeout(enableTranslatorMenu, 3000);
        }
    }
});

function enableTranslatorMenu(){
    if ($( window ).scrollTop() > 110) {
        $('.gtranslate_wrapper').fadeIn('slow').css('display', 'block');
    }
    gTimer = null;
}

//Categories
let resizedTogCategories = false;

$(window).on('resize', function() {
    if($(window).width() < 767) {
        $( "#category-tree").slideUp();
    }
    else{
        if ( $( "#category-tree" ).first().is( ":hidden" ) )
        {
            $( "#category-tree" ).slideDown();
        }
    }
});

$( "#tog-categories" ).click(function() {
    if ( $( "#category-tree" ).first().is( ":hidden" ) ) {
        $( "#category-tree").slideDown();
      } else {
        $( "#category-tree" ).slideUp();
      }
});

$( document ).ready(function() {
    if($(window).width() < 767) {
        $( "#category-tree").hide();
    }
});
