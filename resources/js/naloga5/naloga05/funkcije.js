var open_tab = $("li").eq(0);
var click_all = false;

$( ".vsebina:gt(0)" ).hide();
$( "li:gt(4)" ).hide();

$( ".vse_novice" ).on( "click", function() {
    $("li:lt(7)").show();
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
                    console.log("ok");
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
