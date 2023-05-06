var searchText = document.getElementById("searchText").value;

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (xhttp.readyState === XMLHttpRequest.DONE && xhttp.status === 200) {
        // Handle the response from the PHP script
        var response = xhttp.responseText;
        console.log(response);
    }
};
xhttp.open("GET", "search.php?chon=" + searchText, true);
xhttp.send();
