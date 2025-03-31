document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('#star_input');
    
    stars.forEach((star, index) => {
        star.addEventListener('click', () => {
            stars.forEach((s, i) => {
                if (i <= index) {
                    s.classList.add('selected');
                    s.innerHTML = '<img src="./image/books/star.jpg">'; // Filled star
                } else {
                    s.classList.remove('selected');
                    s.innerHTML = '<img src="./image/books/grey_star.png">'; // Empty star
                }
            });
        });
    });
});
