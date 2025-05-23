function show_result(str_query, page_number) {
    var book_list = document.querySelector(".book_list");

    if(str_query.length == 0) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange=function() {
            if(this.readyState == 4 && this.status == 200) {
                document.open();
                document.write(this.responseText);
                document.close();
            }
        }
        xhr.open("GET", "./index.php?page=books&page_number=" + page_number, true);
        xhr.send();
    }
    else {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange=function() {
            if(this.readyState == 4 && this.status == 200) {
                book_list.innerHTML = this.responseText;
            }
        }
        xhr.open("GET", "./logical/live_search.php?book_search=" + encodeURIComponent(str_query), true);
        xhr.send();
    }
}   
