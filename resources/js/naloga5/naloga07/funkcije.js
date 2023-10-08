var open_tab = $("li").eq(0);
var click_all = false;

$( ".trenutne_novice" ).hide();

$( ".vsebina:gt(0)" ).hide();
$( "li:gt(4)" ).hide();

$( ".vse_novice" ).on( "click", function() {
    $("li:lt(7)").show();
    $( ".vse_novice" ).hide();
    $( ".trenutne_novice" ).show();
});

$( ".trenutne_novice" ).on( "click", function() {
    $("li").hide();
    $("li:lt(5)").show();
    $( ".trenutne_novice" ).hide();
    $( ".vse_novice" ).show();
});

$( ".skrij_vse" ).on( "click", function() {
    $("li .vsebina").slideUp( "slow" );
    open_tab = null;
});

$( ".pokazi_vse" ).on( "click", function() {
    $("li .vsebina").slideDown( "slow" );
    click_all = true;
});

$("li").on("click", function(event) {
    if ($(event.target).hasClass( "glava" )) {
        var clicked_tab = $(this);
        if(click_all === true)
        {
            $("li:visible").each(function(index, element) {
                if(!clicked_tab.is(element))
                {
                    $(element).find(".vsebina").slideToggle("slow");
                }
                
            })
            open_tab = clicked_tab;
            click_all = false;
        }
        else
        {
            if($(this).is(open_tab))
            {
                open_tab.find(".vsebina").slideToggle("slow");
                open_tab = null;
            }
            else
            {
                if(open_tab === null)
                {
                    $(this).find( ".vsebina" ).slideToggle("slow");
                    open_tab = $(this);
                }
                else
                {
                    $(this).find(".vsebina").slideToggle("slow");
                    open_tab.find(".vsebina").slideToggle("slow");
                    open_tab =  $(this);
                }
            }
        }
        
    }
});
