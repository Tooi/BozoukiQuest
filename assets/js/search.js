$(document).ready(function() {
 
 $('#searchform').submit(function(e){   //the searchbar function. what happens when you press search or 'enter'.
var mydata = JSON.parse(data); //looks in the data JSON file for keywords
var searchtext=$('#searchtext').val();
if(searchtext.length==0)
{
	$('#searchresult').show();
	$('#searchresult').html("<div class='fade in'>Search for something...</div>"); //if they try a search with nothing in the bar
	$('#searchresult').delay(3000).fadeOut('fast');
	return false;
}

var i=0;
for(i=0;i<mydata.length;i++)
{
	if(mydata[i].keyword.toUpperCase()==searchtext.toUpperCase()) //this for loop searches the data.json for keywords that are equal to what was typed.
	{
		window.location.href=mydata[i].url;
		return false;
	}
}
	$('#searchresult').show();
	$('#searchresult').html("<div class='fade in'>No matches</div>"); //if it can't find a match then...
	$('#searchresult').delay(3000).fadeOut('fast');
 });
});