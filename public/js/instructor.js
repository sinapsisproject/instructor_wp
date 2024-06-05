jQuery(document).ready( function(){

    var height_blue_box = jQuery('#box-white-instructor-description').height();

    if(Math.ceil(height_blue_box) >= 230){

        console.log(Math.ceil(height_blue_box));

        var dif_space = height_blue_box - 465;
        var total = dif_space < 0 ? dif_space * -1 : dif_space;
        jQuery("#courses-instructor-box").css("margin-bottom" , Math.ceil(total));

    }else{
        jQuery("#courses-instructor-box").css("margin-bottom" , 50);
    }

})