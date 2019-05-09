<?php 
$sLinkToPageBack = 'search-results.php';
  require_once 'top.php';
?>

    <h1>Driver Details</h1>
    <input type="text" placeholder="Name"><br>
    <input type="text" placeholder="Last name"><br>


    <input type="text" name="birthday" value="10/24/1984" />

<script>
$(function() {
  $('input[name="birthday"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    maxYear: parseInt(moment().format('YYYY'),10)
  }, function(start, end, label) {
    var years = moment().diff(start, 'years');
    alert("You are " + years + " years old!");
  });
});
</script>

    <input type="email" placeholder="Email"><br>
    <input type="password" placeholder="Password"><br>
    <a href="payment.php">Continue</a>


<?php 
    require_once 'bottom.php';
?>



