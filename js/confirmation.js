console.log("confirmation/view-booking");
let equipmentExists = document.getElementById("extra-equipment-on-view-booking");
let chosenPickupLocation;
let chosenDropoffLocation;

// if user searched for car without being singned up/in
if( localStorage.getItem('searchResultsCarImgPath') == null &&
    localStorage.getItem('chosenCarTitle') == null &&
    localStorage.getItem('searchPickupLocation') == null &&
    localStorage.getItem('searchPickupDateTime') == null) {
        let paymentTotal = document.querySelector("#payment-total");
        let chosenPickup = document.querySelector("#chosen-pickup");
        let chosenDropoff = document.querySelector("#chosen-dropoff");
        let chosenPickupLocation = document.querySelector("#pickup-location");
        let chosenDropoffLocation = document.querySelector("#dropoff-location");
        let chosenCarImgContainer = document.querySelector("#chosen-car-image");
        let chosenCarTitle = document.querySelector("#chosen-car-title");

        paymentTotal.innerText = '450';
        chosenCarImgContainer.src = 'images/2015-citroen-c1-airscape-feel-3door-microcar-black.png';
        chosenCarTitle.innerText = 'Mini Manual';
        chosenPickupLocation.innerText = 'Lygten 37';
        chosenDropoffLocation.innerText = 'Guldbergsgade 29N';
        chosenPickup.innerText = 'June 11, 2019 10:00 AM';
        chosenDropoff.innerText = 'June 12, 2019 5:00 PM';

        document.querySelector("#baby-seat").classList.remove('hidden');
        document.querySelector("#mobile-wifi").classList.remove('hidden');


} else {
    
    // user signed in/up

    let paymentTotal = document.querySelector("#payment-total");
    let chosenPickup = document.querySelector("#chosen-pickup");
    let chosenDropoff = document.querySelector("#chosen-dropoff");
    let chosenPickupLocation = document.querySelector("#pickup-location");
    let chosenDropoffLocation = document.querySelector("#dropoff-location");
    let chosenCarImgContainer = document.querySelector("#chosen-car-image");
    let chosenCarTitle = document.querySelector("#chosen-car-title");


    
    if(localStorage.getItem('searchPickupLocation') == localStorage.getItem('searchReturnLocation')){
        chosenPickupLocation.innerText = localStorage.getItem('searchPickupLocation');
        chosenDropoffLocation.innerText = localStorage.getItem('searchPickupLocation');
    } else {
        chosenPickupLocation.innerText = localStorage.getItem('searchPickupLocation');
        chosenDropoffLocation.innerText = localStorage.getItem('searchReturnLocation');
    }

    chosenCarImgContainer.src = localStorage.getItem('searchResultsCarImgPath');
    chosenCarTitle.innerText = localStorage.getItem('searchResultsCarName');
    // chosenPickupTime
    chosenPickup.innerText = localStorage.getItem('searchPickupDateTime');
    chosenDropoff.innerText = localStorage.getItem('searchDropoffDateTime');
    paymentTotal.innerText = localStorage.getItem('paymentTotal');
}

if(equipmentExists){
    console.log("extra equipment exists on view-booking");

    if(localStorage.getItem('carDetailsBabySeat')){
        document.querySelector("#baby-seat").classList.remove('hidden');
    }
    if(localStorage.getItem('carDetailsMobileWifi')){
        document.querySelector("#mobile-wifi").classList.remove('hidden');
    }
    if(localStorage.getItem('carDetailsHandsFree')){
        document.querySelector("#hands-free").classList.remove('hidden');
    }
}






