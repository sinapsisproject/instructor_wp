jQuery(document).ready( function(){

    var height_blue_box = jQuery('#box-white-instructor-description').height();
    var dif_space = height_blue_box - 465;
    var total = dif_space < 0 ? dif_space * -1 : dif_space;

    jQuery("#courses-instructor-box").css("margin-bottom" , Math.ceil(total));

})