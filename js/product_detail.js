new_btn = document.querySelector('.new_btn')
used_btn = document.querySelector('.used_btn')
digital_btn = document.querySelector('.digital_btn')

new_btn.addEventListener("click",() => { 
    new_btn.setAttribute("id", "chosen");
    used_btn.removeAttribute("id");
    digital_btn.removeAttribute("id");
});

used_btn.addEventListener("click",() => { 
    used_btn.setAttribute("id", "chosen");
    new_btn.removeAttribute("id");
    digital_btn.removeAttribute("id");
});

digital_btn.addEventListener("click",() => { 
    digital_btn.setAttribute("id", "chosen");
    used_btn.removeAttribute("id");
    new_btn.removeAttribute("id");
});