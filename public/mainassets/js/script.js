//Hamburger Menu
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('nav');

    hamburger.addEventListener('click', function () {
        navMenu.classList.toggle('active');
    });
});

//FAQS
document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const faqItem = button.parentElement;
        faqItem.classList.toggle('active');
    });
});