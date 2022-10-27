//<---------------------------------menu burger---------------------------------> */


const navBar = document.querySelector('#navBar');
const burger = document.querySelector('.burger');

function toogleMenu()
{
    burger.addEventListener('click', ()=>
    {
        navBar.classList.toggle('openNavBar');
    })
}

toogleMenu();