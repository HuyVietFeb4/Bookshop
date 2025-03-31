edit_button = document.querySelector('#edit_button');
pop_out_btn = document.querySelector('#pop_out_btn');
edit_button.addEventListener("click",() => { 
    const popup = document.querySelector('.modal');
    popup.style.display = "flex";
});

pop_out_btn.addEventListener("click",() => { 
    const popup = document.querySelector('.modal');
    popup.style.display = "none";
});