const openModal5 = document.querySelector('.btn-x5');
const modal5 = document.querySelector('.modal5');
const closeModal5 = document.querySelector('.modal__close5');

openModal5.addEventListener('click', (e)=>{
    e.preventDefault();
    modal5.classList.add('modal--show5');
});

closeModal5.addEventListener('click', (e)=>{
    e.preventDefault();
    modal5.classList.remove('modal--show5');
});