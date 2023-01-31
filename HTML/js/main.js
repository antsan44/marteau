var style_btn = document.getElementById('change_style');
var link = document.getElementById('css_link');
var img = document.getElementById('img_style');

style_btn.addEventListener('click', function() {
	if (link.getAttribute('href') == 'css/style_clair.css')
	{
		document.cookie = "theme=dark;path=/;SameSite=None;Secure";
		link.setAttribute('href', 'css/style_sombre.css');
		img.setAttribute('src', 'assets/soleil.png');
	}
	else
	{
		document.cookie = "theme=white;path=/;SameSite=None;Secure";
		link.setAttribute('href', 'css/style_clair.css');
		img.setAttribute('src', 'assets/lune.png');
	}
});