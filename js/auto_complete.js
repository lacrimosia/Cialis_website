 $(function() {

// holds our headings
var tags = [];

// grabs the heading text
var headings = $('p');

// gets each heading and stores inside array 
headings.each(function() {
    tags.push( $(this).text() );
});


	
console.log(tags);
// sets up our autcomplete 
$( "#tags" ).autocomplete({
source: tags, 
select: function(event, ui){
	// load anchor tag associated with search term and remove white space
/* 	location.href="#"+ui.item.value.replace(/\s/g, "") ; */
},
close: function(event, ui) {
// empty field after clicked
this.value = null;
 }
});

 $('.carousel').carousel({
        interval: 4000
    });

});