var $popup = $('<div id="popup"></div>');
var $image = $("<img>");
var $caption = $("<p> </p>");

//Append image and caption to popup before we append popup to body
$popup.append($image);
$popup.append($caption);

//Append popup div to html
$("body").append($popup);

// Capture click event on link
$("div a").click(function(event) {
    event.preventDefault();
    var href = $(this).attr("href");

    //Set src as href from link clicked
    $image.attr("src", href);
    $popup.show();
});

//Get alt text to set caption
var captionText = $("div.thumbnail").find("img").attr("alt");
$caption.text(captionText);

//Hide popup when clicked
$popup.click(function() {
    $popup.hide();
});