const openModal1 = document.querySelector('.btn-x2');
const modal1 = document.querySelector('.modal1');
const closeModal1 = document.querySelector('.modal__close1');

openModal1.addEventListener('click', (e)=>{
    e.preventDefault();
    modal1.classList.add('modal--show1');
});

closeModal1.addEventListener('click', (e)=>{
    e.preventDefault();
    modal1.classList.remove('modal--show1');
});