minus = document.querySelector('#minus')
quantity = document.querySelector('#quantity')
plus = document.querySelector('#plus')

minus.addEventListener("click",() => { 
    if (parseInt(quantity.textContent) > 1) {
        var newQuantity = parseInt(quantity.textContent) - 1
        quantity.textContent = newQuantity
    }
});

plus.addEventListener("click",() => { 
    var newQuantity = parseInt(quantity.textContent) + 1
    quantity.textContent = newQuantity
});


new_btn = document.querySelector('.new_btn')
used_btn = document.querySelector('.used_btn')
digital_btn = document.querySelector('.digital_btn')

new_btn.addEventListener("click",() => { 
    new_btn.setAttribute("id", "chosen");
    used_btn.setAttribute("id", "");
    digital_btn.setAttribute("id", "");
});

used_btn.addEventListener("click",() => { 
    used_btn.setAttribute("id", "chosen");
    new_btn.setAttribute("id", "");
    digital_btn.setAttribute("id", "");
});

digital_btn.addEventListener("click",() => { 
    digital_btn.setAttribute("id", "chosen");
    used_btn.setAttribute("id", "");
    new_btn.setAttribute("id", "");
});