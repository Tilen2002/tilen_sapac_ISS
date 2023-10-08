var open_tab = $("li").eq(0);

$( ".vsebina:gt(0)" ).hide();
$( "li:gt(4)" ).hide();

$( ".vse_novice" ).on( "click", function() {
    $("li:lt(7)").show();
});

$("li").on("click", function(event) {
    if ($(event.target).hasClass( "glava" )) {
        if($(this).is(open_tab))
        {
            $(this).find( ".vsebina" ).slideToggle("slow");
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
                open_tab.find( ".vsebina" ).slideToggle("slow");
                $(this).find( ".vsebina" ).slideToggle("slow");
                open_tab =  $(this);
            }
        }
    }
});
