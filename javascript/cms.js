const orderList = document.querySelectorAll('.orderList');
const inputCol = document.querySelector('#searchOrderId');
console.log(orderList,inputCol)

function filterOrder(){
    for(i=0;i<orderList.length;i++){
        orderList[i].classList.replace('table-row','d-none');
    }
    let orderIndex = inputCol.value;
    document.getElementById(orderIndex).classList.replace('d-none','table-row');
}

function allOrder(){
    for(i=0;i<carList.length;i++){
        carList[i].classList.replace('d-none','d-flex');
    }
}