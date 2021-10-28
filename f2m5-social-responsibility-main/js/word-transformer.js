document.querySelectorAll('.accordion-btn').forEach(button => {
    button.addEventListener('click', () => {
        const accordioncontent = button.nextElementSibling;

        button.classList.toggle('accordion-btn--active');

        if (button.classList.contains('accordion-btn--active')) {
            accordioncontent.style.maxHeight = accordioncontent.scrollHeight + 'px';
        }
        else {
            accordioncontent.style.maxHeight = 0;
        }
    });
});