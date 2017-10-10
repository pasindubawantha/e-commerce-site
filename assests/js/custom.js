function pickCatogorySearchBar(e){
	console.log(e.name)
	$('#search_catogory').text(e.name)
	$('#search_catogory').attr('catid',e.id)
} 