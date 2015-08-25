$('span[id^="replaceWithWrap"]').hide();

$("input[type='radio']").on( "click", function() {
  if($("input[value='replace']").is(':checked')) {
	  $('span[id^="replaceWithWrap"]').show();
  } else {
	  $('span[id^="replaceWithWrap"]').hide();
  }
});