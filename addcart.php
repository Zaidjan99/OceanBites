<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if the "form_type" value is set in the $_POST array
  if (isset($_POST['insert-into-cart'])) {
    $formType = $_POST['insert-into-cart'];

    // Perform actions based on the form that was clicked
    if ($formType === 'phfp') {
        $formSubmitted = 'phfp';
        $price = 75;
        $name = 'Prawn And Haddock Fish Pie';
    } elseif ($formType === 'ss') {
      $formSubmitted = 'ss';
      $price=50;
    } 
  if(isset($_POST[$formSubmitted]))
  {
    $con = mysqli_connect('localhost:3307', 'root', '', 'oceanbites');
    if($con){
      $insertdata = INSERT INTO `additems` (ID,NAME,PRICE)VALUES (NULL,$name,$price);
    }

  }


}
}
?>
