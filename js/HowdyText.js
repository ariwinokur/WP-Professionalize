jQuery('span[id^="replaceWithWrap"]').hide();

jQuery("input[type='radio']").on( "click", function() {
  if(jQuery("input[value='replace']").is(':checked')) {
	  jQuery('span[id^="replaceWithWrap"]').show();
  } else {
	  jQuery('span[id^="replaceWithWrap"]').hide();
  }
});