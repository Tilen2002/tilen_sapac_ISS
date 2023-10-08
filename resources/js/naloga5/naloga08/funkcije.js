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
    $("li").each(function(index, element) {
        var $glava = $(element).find(".glava");
        if($glava.hasClass("skrij"))
        {
            $glava.removeClass("skrij");
            $glava.addClass("pokazi");
        }    
    });
});

$( ".pokazi_vse" ).on( "click", function() {
    $("li .vsebina").slideDown( "slow" );
    click_all = true;
    $("li").each(function(index, element) {
        var $glava = $(element).find(".glava");
        if($glava.hasClass("pokazi"))
        {
            $glava.removeClass("pokazi");
            $glava.addClass("skrij");
        }    
    });
});

function addIcons() {
    $("li").each(function(index, element) {
        var $vsebina = $(element).find(".vsebina");
        var $glava = $(element).find(".glava");
        if ($vsebina.is(":visible")) {
            if($vsebina.hasClass("pokazi"))
            {
                $glava.removeClass("pokazi");
            }
            $glava.addClass("skrij");
        } else 
        {
            if($vsebina.hasClass("skrij"))
            {
                $glava.removeClass("skrij");
            }
            $glava.addClass("pokazi");
        }
    });
}

$(document).ready(function() {
    addIcons();
});


$("li").on("click", function(event) {
    if ($(event.target).hasClass( "glava" )) {
        var clicked_tab = $(this);
        if(click_all === true)
        {
            $("li").each(function(index, element) {
                var $glava = $(element).find(".glava");
                if(($glava.hasClass("skrij")) && (!clicked_tab.is(element)))
                {
                    $glava.removeClass("skrij");
                    $glava.addClass("pokazi");
                }    
            });

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
                open_tab.find(".glava").toggleClass("skrij pokazi");
                open_tab = null;
            }
            else
            {
                if(open_tab === null)
                {
                    $(this).find( ".vsebina" ).slideToggle("slow");
                    open_tab = $(this);
                    open_tab.find(".glava").toggleClass("skrij pokazi");
                }
                else
                {
                    $(this).find(".vsebina").slideToggle("slow");
                    $(this).find(".glava").toggleClass("skrij pokazi");
                    open_tab.find(".glava").toggleClass("skrij pokazi");
                    open_tab.find(".vsebina").slideToggle("slow");
                    open_tab =  $(this);
                }
            }
        }
        
    }
});
