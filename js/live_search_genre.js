function show_result_genre(str_query) {
    var genre_list = document.querySelector(".genre_list");

    if(str_query.length == 0) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange=function() {
            if(this.readyState == 4 && this.status == 200) {
                document.open();
                document.write(this.responseText);
                document.close();
            }
        }
        xhr.open("GET", "./index.php?page=genres", true);
        xhr.send();
    }
    else {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange=function() {
            if(this.readyState == 4 && this.status == 200) {
                genre_list.innerHTML = this.responseText;
            }
        }
        xhr.open("GET", "./logical/live_search_genre.php?genre_search=" + encodeURIComponent(str_query), true);
        xhr.send();
    }
}   
