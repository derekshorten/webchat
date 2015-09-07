(fnction() {                                                      
	var $imgs = $('#gallery img');
	var $search = $('#filter-search');
	var cache = [];
	
	$imgs.each(function() {
	 cache.puch({
	  element:this,
	  text: this.alt.trim().toLowerCase()
	 });
   });
   
   function filter() {
	 var query = this.value.trim().toLowerCase();
	 
	 cache.forEach(function(text){
      var index = 0;
	  if (query){
		index = text.text.indexOf(query);
	  }
	  
	  img.element.style.display = index == -1 ? 'none' : '';
	 });
   }
   
   if('oninput' in $search [0]) {
	   $sarch.on('input',filter);
   } else{
	   $search.on('keep',filter);
   }
}());