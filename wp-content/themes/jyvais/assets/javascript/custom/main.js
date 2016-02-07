jQuery(document).ready(function(){

	jQuery('#filter_svg_icon').click(function(){
	    if (jQuery(this).attr("class")) {
	        jQuery(this).removeAttr("class");
	        jQuery('.filter-group-list').slideToggle(300);
	    } else {
	        jQuery(this).attr("class", "animation");
	        jQuery('.filter-group-list').slideToggle(300);
	    }
	});
});