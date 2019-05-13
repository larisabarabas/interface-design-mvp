console.log("search booking")

function showBooking(){
    if(document.querySelector("#booking-number").value != "KEA2019"){
        swal({
            text: "Please enter a valid booking code.",
        });
    } else {
        window.location.href = 'view-booking.php';
    }
    
}