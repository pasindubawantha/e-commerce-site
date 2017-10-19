function pickCatogorySearchBar(e){
	$('#search_catogory_button').text(e.name)
	$('#search_catogory').attr('value',e.id)
} 