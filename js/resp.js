burger = document.querySelector('.burger');
navbar = document.querySelector('.navbar');
navlist = document.querySelector('.navlist');
rightnev = document.querySelector('.rightnev');

burger.addEventListener('click', ()=> {
    rightnev.classList.toggle('vclass');
    navlist.classList.toggle('vclass');
    navbar.classList.toggle('hnav');
})