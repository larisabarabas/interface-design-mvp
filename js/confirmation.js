console.log("confirmation");

let chosenCarImgContainer = document.querySelector("#chosen-car-image");
let chosenCarTitle = document.querySelector("#chosen-car-title");
let chosenPickup = document.querySelector("#chosen-pickup");
let chosenDropoff = document.querySelector("#chosen-dropoff");
let chosenPickupLocation = document.querySelector("#pickup-location");
let chosenDropoffLocation = document.querySelector("#dropoff-location");
let paymentTotal = document.querySelector("#payment-total");

chosenCarImgContainer.src = localStorage.getItem('searchResultsCarImgPath');
chosenCarTitle.innerText = localStorage.getItem('searchResultsCarName');
chosenPickup.innerText = localStorage.getItem('searchPickupDateTime');
chosenDropoff.innerText = localStorage.getItem('searchDropoffDateTime');
chosenPickupLocation.innerText = localStorage.getItem('searchPickupLocation');
chosenDropoffLocation.innerText = localStorage.getItem('searchReturnLocation');
paymentTotal.innerText = localStorage.getItem('paymentTotal');





