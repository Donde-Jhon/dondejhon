// scripts cart 

// view effect
const cart = document.getElementById("cart");
const open_cart = document.getElementById("open-cart");
const close_cart = document.getElementById("close-cart");

open_cart.addEventListener("click", () => {
    cart.classList.add("section-change");
});

close_cart.addEventListener("click", () => {
    cart.classList.remove("section-change");
});

// counter js

const count = document.querySelectorAll("#count");
const high = document.querySelectorAll("#high");
const low = document.querySelectorAll("#low");

count.forEach(count => {

    let count_data = 1;

    count.innerHTML = count_data;

    high.forEach(high => {
        high.addEventListener("click", () => {
            count_data++;
            count.innerHTML = count_data;
        });
    });

    low.forEach(low => {
        low.addEventListener("click", () => {
            if (count_data > 0) {
                count_data--;
                count.innerHTML = count_data;
            }
        });
    });
});


