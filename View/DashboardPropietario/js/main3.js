const openModal3 = document.querySelector('.btn-x3');
const modal3 = document.querySelector('.modal3');
const closeModal3 = document.querySelector('.modal__close3');

openModal3.addEventListener('click', (e)=>{
    e.preventDefault();
    modal3.classList.add('modal--show3');
});

closeModal3.addEventListener('click', (e)=>{
    e.preventDefault();
    modal3.classList.remove('modal--show3');
});