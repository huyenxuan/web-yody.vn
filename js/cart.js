// tăng giảm số lượng 1 sản phẩm
let btnDown = document.querySelector('.down');
let btnIncrease = document.querySelector('.increase');
let quantity = document.querySelector('.quantity');
let priceProductElement = document.getElementById('cost');
let sumPriceElement = document.getElementById('total');
let orderPrice = document.getElementById('order');
let a = 1;

function updatePrices () {
    quantity.innerText = a;
    let priceProduct = parseFloat(priceProductElement.innerText);
    let sumPrice = priceProduct * a;
    sumPriceElement.innerText = sumPrice + '.000đ';
    orderPrice.innerText = sumPrice + '.000đ';
}
btnDown.addEventListener('click', () => {
    if (a > 0) {
        a--;
        updatePrices();
    }
});
btnIncrease.addEventListener('click', () => {
    a++;
    updatePrices();
});

// đếm số lượng sản phẩm
let count_Product = document.getElementById('count-product');
