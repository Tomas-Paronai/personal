/**
 * Created by Mat�� on 3. 11. 2015.
 */

$(function(){
    $(".subnav-container").hide();

    $(".nav-button").click(function(){
        $(this).siblings(".subnav-container").toggle("fast");
    });
});