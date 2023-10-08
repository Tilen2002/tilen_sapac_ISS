$( ".vsebina:gt(0)" ).hide();
$( "li:gt(4)" ).hide();

$( ".vse_novice" ).on( "click", function() {
    $("li:lt(7)").show();
});