edit_book_button = document.querySelector('#edit_book_button');
pop_out_btn = document.querySelector('#pop_out_btn');
save_changes = document.querySelector('#save_changes');

edit_book_button.addEventListener("click",() => { 
    const popup = document.querySelector('.admin_action');
    const user_profile  = document.querySelector('.user_profile');
    popup.style.display = "flex";
    user_profile.style.display = "none"
});

pop_out_btn.addEventListener("click",() => { 
    const popup = document.querySelector('.admin_action');
    const user_profile  = document.querySelector('.user_profile');
    popup.style.display = "none";
    user_profile.style.display = "flex"
});

save_changes.addEventListener("click",() => { 
    const popup = document.querySelector('.admin_action');
    const user_profile  = document.querySelector('.user_profile');
    popup.style.display = "none";
    user_profile.style.display = "flex"
});