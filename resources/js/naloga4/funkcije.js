$( "body" ).addClass( "ozadje" );

$( "div" ).first().addClass( "green_box" );

$("div:eq(1)").addClass("red_box");

$( "tr" ).addClass( "y" );

$( "tr" ).first().removeClass( "y" );

$( "tr" ).first().addClass( "x" );

var tabela = $( "tr" ).slice(1).css( "background-color", "#9db6f2");
tabela.even().css( "background-color", "white" );
$( "td:contains('Janez')" ).css( "color", "red" );


$("a").each(function () {
    var $icon = $("<img>");
    $(this).css( "display", "inline-block");
    if ($(this).attr("href").toLowerCase().endsWith(".pdf")) {
        $icon.attr("src", pdf_icon_url);
        $icon.attr("alt", "Pdf icon");
        $icon.css( "display", "inline-block");
        $icon.css( "float", "left");
        $icon.css( "padding-top", "4px");
        $icon.css( "padding-right", "4px");
        $(this).append($icon);
    }
    if ($(this).attr("href").toLowerCase().endsWith(".doc")) {
        $icon.attr("src", doc_icon_url);
        $icon.attr("alt", "Doocument icon");
        $icon.css( "display", "inline-block");
        $icon.css( "float", "left");
        $icon.css( "padding-top", "4px");
        $icon.css( "padding-right", "4px");
        $(this).append($icon);
    }
    if ($(this).attr("href").toLowerCase().startsWith("mailto:")) {
        $icon.attr("src", mail_icon_url);
        $icon.attr("alt", "Mail icon");
        $icon.css( "display", "inline-block");
        $icon.css( "float", "left");
        $icon.css( "padding-top", "4px");
        $icon.css( "padding-right", "4px");
        $(this).append($icon);
    }
    
});

$("td:contains('gsm'), td:contains('web')").each(function () {
    var $icon = $("<img>").css("display", "inline-block");
    var $container = $("<div>").css("display", "inline-block");
    var text = $(this).text().toLowerCase();

    if (text.includes('gsm')) {
        $icon.attr("src", phone_icon_url);
        $icon.attr("alt", "Phone icon");
    }
    if (text.includes('web')) {
        $icon.attr("src", www_icon_url);
        $icon.attr("alt", "World wide web icon");
    }
    $icon.css( "padding-bottom", "2px");
    $container.append($icon);
    $container.append($(this).html());
    $(this).html($container);
});

$( "td:empty" ).text("***");

$("td").each(function (){
    var text = $(this).text().trim();
    var $icon = $("<img>")

    if (text === 'm') {
        $icon.attr("src", man_icon_url);
        $icon.attr("alt", "Man icon");
        $(this).html($icon);
    }
    if (text === 'z') {
        $icon.attr("src", woman_icon_url);
        $icon.attr("alt", "Woman icon");
        $(this).html($icon);
    }
});

$( "#polje" ).css("margin-left", "1em");
$( "#polje" ).css("margin-top", "1em");
$( "#polje" ).attr("spellcheck", "false");
$( ".vpisani" ).css("margin-left", "1em");
$( ".ostalo" ).css("margin-left", "1em");

var actual_count = 0
var input_enabled = true;
$( ".vpisani" ).text(actual_count);
$( ".ostalo" ).text(20-actual_count);

$( "#polje" ).on( "keydown", function(event) {
    if(actual_count === 20)
    {
        $( "#polje ").prop("readonly", true);
        input_enabled = false;
    }
    if(input_enabled === false && event.which === 8)
    {
        $( "#polje ").prop("readonly", false);
        input_enabled = true;
    }
    if(input_enabled === true)
    {
        if (event.which === 8) {
            if(actual_count!==0)
            {
                actual_count--;
            }
        }
        else
        {
            actual_count++;
        }
    }
    $( ".vpisani" ).text(actual_count);
    $( ".ostalo" ).text(20-actual_count);
});
