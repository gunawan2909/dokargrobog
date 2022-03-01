const alert = document.querySelector('.alert');
const close =document.getElementById('tombol');
close.addEventlistener('click',()=>{
    alert.style.opacity =1;
})