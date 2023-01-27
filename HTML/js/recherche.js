var url = window.location.search;
var query = new URLSearchParams(url).get('search_field');
var search_field =  document.getElementById('search_field');

search_field.value = query;