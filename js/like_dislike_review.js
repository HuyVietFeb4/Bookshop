helpful_btns = document.querySelectorAll("#helpful_btn")
not_helpful_btns = document.querySelectorAll("#not_helpful_btn")
like_sum = document.querySelectorAll("#like_sum")
dislike_sum = document.querySelectorAll("#dislike_sum")

helpful_btns.forEach((helpful_btn, index) => {
    helpful_btn.addEventListener("click", () => {
        if (helpful_btn.style["background-color"] == 'royalblue') {
            helpful_btn.style["background-color"] = 'transparent';
            like_sum[index].textContent = parseInt(like_sum[index].textContent) - 1;
        } else {
            helpful_btn.style["background-color"] = 'royalblue';
            like_sum[index].textContent = parseInt(like_sum[index].textContent) + 1;
            if (not_helpful_btns[index].style["background-color"] == 'tomato') {
                not_helpful_btns[index].style["background-color"] = 'transparent';
                dislike_sum[index].textContent = parseInt(dislike_sum[index].textContent) - 1;
            }
        }
    });
});

not_helpful_btns.forEach((not_helpful_btn, index) => {
    not_helpful_btn.addEventListener("click", () => {
        if (not_helpful_btn.style["background-color"] == 'tomato') {
            not_helpful_btn.style["background-color"] = 'transparent';
            dislike_sum[index].textContent = parseInt(dislike_sum[index].textContent) - 1;
        } else {
            not_helpful_btn.style["background-color"] = 'tomato';
            dislike_sum[index].textContent = parseInt(dislike_sum[index].textContent) + 1;
            if (helpful_btns[index].style["background-color"] == 'royalblue') {
                helpful_btns[index].style["background-color"] = 'transparent';
                like_sum[index].textContent = parseInt(like_sum[index].textContent) - 1;
            }
        }
    });
});


