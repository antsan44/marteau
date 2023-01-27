document.getElementById('change_style').addEventListener('click', function() {
	var img = document.getElementById('img_style');

	if (img.getAttribute('src') == 'assets/soleil.png')
	{
		document.getElementById('css_link').setAttribute('href', 'css/style clair.css');
		img.setAttribute('src', 'assets/lune.png');
	}
	else
	{
		document.getElementById('css_link').setAttribute('href', 'css/style sombre.css');
		img.setAttribute('src', 'assets/soleil.png');
	}
});