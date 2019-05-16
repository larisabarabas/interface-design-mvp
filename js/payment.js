

document.getElementById('chosenCarPrice').textContent += localStorage.getItem('searchResultsCarPrice') + ' DKK';
let extraHandsFree;
let extraMobileWifi;
let extraBabySeat;
let payBtn = document.querySelector("#payBtn");


if(localStorage.getItem('carDetailsHandsFree')){
     extraHandsFree = localStorage.getItem('carDetailsHandsFree');
} else {
    extraHandsFree = '0';
}

if(localStorage.getItem('carDetailsMobileWifi')){
    extraMobileWifi = localStorage.getItem('carDetailsMobileWifi');
} else {
    extraMobileWifi = '0';
}

if(localStorage.getItem('carDetailsBabySeat')){
     extraBabySeat = localStorage.getItem('carDetailsBabySeat');
} else{
    extraBabySeat = '0';
}


let extrasPrice = parseInt(extraBabySeat) + parseInt(extraHandsFree) + parseInt(extraMobileWifi);
let chosenCarPrice = parseInt(localStorage.getItem('searchResultsCarPrice'));
document.getElementById('extrasPrice').textContent += extrasPrice.toString() + ' DKK';

let total = extrasPrice + chosenCarPrice
localStorage.setItem('paymentTotal', total.toString())
let VAT =  total * 0.25;
document.getElementById('VAT').textContent += VAT.toString() + ' DKK';
document.getElementById('total').textContent += total.toString() + ' DKK';



function pay(){
        let paymentCardNo = document.getElementById('paymentCardNo').value;
        let paymentCardHolder = document.getElementById('paymentCardHolder').value;
        let paymentCardExpiryYear = document.getElementById('paymentCardExpiryYear').value;
        let paymentCardExpiryMonth = document.getElementById('paymentCardExpiryMonth').value;
        let paymentCardCVV = document.getElementById('paymentCardCVV').value;
        localStorage.setItem('paymentCardNo', paymentCardNo);
        localStorage.setItem('paymentCardHolder', paymentCardHolder);
        localStorage.setItem('paymentCardExpiryYear', paymentCardExpiryYear);
        localStorage.setItem('paymentCardExpiryMonth', paymentCardExpiryMonth);
        localStorage.setItem('paymentCardCVV', paymentCardCVV);

            swal({
                icon: "success",
                text: "Payment success"
              }).then(()=>{
                  window.location.href = 'confirmation.php'
              });
}

function removeDisableBtn(){
    let paymentCardNo = document.getElementById('paymentCardNo').value;
    let paymentCardHolder = document.getElementById('paymentCardHolder').value;
    let paymentCardExpiryYear = document.getElementById('paymentCardExpiryYear').value;
    let paymentCardExpiryMonth = document.getElementById('paymentCardExpiryMonth').value;
    let paymentCardCVV = document.getElementById('paymentCardCVV').value;
    if(paymentCardNo!=='' && paymentCardHolder!=='' && paymentCardExpiryYear!=='' && paymentCardExpiryMonth!=='' && paymentCardCVV!==''){
        payBtn.removeAttribute('disabled');
    }
}

