add_book_btn = document.querySelector('#add_book_btn');
pop_out_btn = document.querySelector('#pop_out_btn');
save_changes = document.querySelector('#save_changes');

add_book_btn.addEventListener("click",() => { 
    const popup = document.querySelector('.add_book');
    popup.style.display = "flex";
});

pop_out_btn.addEventListener("click",() => { 
    const popup = document.querySelector('.add_book');
    popup.style.display = "none";
});

save_changes.addEventListener("click",() => { 
    const popup = document.querySelector('.add_book');
    popup.style.display = "none";
});