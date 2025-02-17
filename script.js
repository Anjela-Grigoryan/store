let menu = document.getElementById("menu-btn");
let userBtn = document.getElementById("user-btn");

menu.addEventListener('click', function(){
    let nav = document.querySelector('.navbar');
    nav.classList.toggle('active');
});

userBtn.addEventListener('click', function(){
    let userBox = document.querySelector('.user-box');
    userBox.classList.toggle('active');
});


// ////////////////////////////////////////////////////

window.addEventListener('click', function (event) {
    let count;

    if(event.target.dataset.action === 'plus' || event.target.dataset.action === 'minus'){
        const counts = event.target.closest('.count-box');
        const info = event.target.closest('.product');

        count = counts.querySelector('[data-counter]');
    }

    if(event.target.dataset.action === 'plus'){
        count.value = ++count.value;
    }else if (event.target.dataset.action === 'minus') {
        if(parseInt(count.value) > 0){
            count.value = --count.value;
        }
    }
})

// ////////////////////////////////////////////////////

const shoppingCard = document.getElementById('shopping-card');
const shopContainer = document.querySelector('.shop-container');

shoppingCard.addEventListener('click', function(){
    shopContainer.style.display = (shopContainer.style.display == "none") ? "inline-block" : "none";
})

///////////////////////////////////////////////////////

const cartDelete = document.querySelector('.cart-delete');

cartDelete.addEventListener('click', function(){
    shopContainer.style.position = "absolute";
})

///////////////////////////////////////////////////////
