document.getElementById('change_style').addEventListener('click', function() {
	var img = document.getElementById('img_style');

	if (img.getAttribute('src') == 'lune.png')
	{
		document.getElementById('css_link').setAttribute('href', 'style sombre.css');
		img.setAttribute('src', 'soleil.png');
	}
	else
	{
		document.getElementById('css_link').setAttribute('href', 'style clair.css');
		img.setAttribute('src', 'lune.png');
	}
});


	





//Check the url of the page
//get the nb of the page
//change the value of the option



var select = document.getElementById("page-select");
var url = window.location.search;
var nb_page = new URLSearchParams(url).get('page');
select.value = nb_page;

select.addEventListener("change", function() {
    var selectedPage = select.value;
    window.location.href = "?page=" + selectedPage;
});