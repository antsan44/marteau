var select = document.getElementById("page-select");
var url = window.location.search;
var nb_page = new URLSearchParams(url).get('page');
select.value = nb_page == null ? 1 : nb_page;

select.addEventListener("change", function() {
    var selectedPage = select.value;
    window.location.href = "?page=" + selectedPage;
});