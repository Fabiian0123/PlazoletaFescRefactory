const openModal4 = document.querySelector('.btn-x4');
const modal4 = document.querySelector('.modal4');
const closeModal4 = document.querySelector('.modal__close4');

openModal4.addEventListener('click', (e)=>{
    e.preventDefault();
    modal4.classList.add('modal--show4');
});

closeModal4.addEventListener('click', (e)=>{
    e.preventDefault();
    modal4.classList.remove('modal--show4');
});