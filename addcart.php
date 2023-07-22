<?php
$con = mysqli_connect('localhost', 'root', '', 'oceanbites');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check which form was submitted based on the name attribute of the submit button
    if (isset($_POST["insert-into-cart"]) && $_POST["insert-into-cart"] === "phfp") {
        $name = "Prawn And Haddock Fish Pie";
        // Handle the data from Form 1 here
        $query = "INSERT INTO additems (id, name, price) VALUES (NULL, '$name', 75)";
        mysqli_query($con, $query);
        header("location: index.html");
        // echo "Prawn and haddock fish pie submitted";
        // For example, you can access the form data like this:
        // $itemName = "Prawn And Haddock Fish Pie";
        // $price = 75;
        
    } elseif (isset($_POST["insert-into-cart"]) && $_POST["insert-into-cart"] === "ss") {
        $name = "Shrimp Scampi";
        // Handle the data from Form 1 here
        $query = "INSERT INTO additems (id, name, price) VALUES (NULL, '$name', 50)";
        mysqli_query($con, $query);
        header("location: index.html");
    }
    
    elseif (isset($_POST["insert-into-cart"]) && $_POST["insert-into-cart"] === "mspc") {
        $name = "Mediterranean Seafood With Polenta Cubes";
        // Handle the data from Form 1 here
        $query = "INSERT INTO additems (id, name, price) VALUES (NULL, '$name', 120)";
        mysqli_query($con, $query);
        header("location: index.html");
    }

    elseif (isset($_POST["insert-into-cart"]) && $_POST["insert-into-cart"] === "gltgb") {
        $name = "Grilled Lobster Tails with Garlic Butter";
        // Handle the data from Form 1 here
        $query = "INSERT INTO additems (id, name, price) VALUES (NULL, '$name', 115)";
        mysqli_query($con, $query);
        header("location: index.html");
    }
    
    elseif (isset($_POST["insert-into-cart"]) && $_POST["insert-into-cart"] === "coscr") {
        $name = "Chipotle Orange Shrimp With Cilantro Rice";
        // Handle the data from Form 1 here
        $query = "INSERT INTO additems (id, name, price) VALUES (NULL, '$name', 80)";
        mysqli_query($con, $query);
        header("location: index.html");
    }

    elseif (isset($_POST["insert-into-cart"]) && $_POST["insert-into-cart"] === "sfs") {
        $name = "Spanish Fish Stew";
        // Handle the data from Form 1 here
        $query = "INSERT INTO additems (id, name, price) VALUES (NULL, '$name', 95)";
        mysqli_query($con, $query);
        header("location: index.html");
    }

    elseif (isset($_POST["insert-into-cart"]) && $_POST["insert-into-cart"] === "gfs") {
        $name = "Grilled Fish Steak";
        // Handle the data from Form 1 here
        $query = "INSERT INTO additems (id, name, price) VALUES (NULL, '$name', 100)";
        mysqli_query($con, $query);
        header("location: index.html");
    }

    elseif (isset($_POST["insert-into-cart"]) && $_POST["insert-into-cart"] === "fcns") {
        $name = "Fish Curry With Nigella Seeds";
        // Handle the data from Form 1 here
        $query = "INSERT INTO additems (id, name, price) VALUES (NULL, '$name', 60)";
        mysqli_query($con, $query);
        header("location: index.html");
    }

    else {
        // Invalid form submission
        // You can handle the error or redirect back to the page with an error message
        header("Location: index.php?error=Invalid%20form%20submission");
        exit;
    }

    // Perform the necessary actions with the form data, such as adding to cart, storing in the database, etc.
    // ...
    
    // After processing the form data, you can redirect the user to a confirmation page or the same page with a success message
    // header("Location: confirmation.php");
    
    exit;
}
?>




// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   // Check if the "form_type" value is set in the $_POST array
//   if (isset($_POST['insert-into-cart'])) {
//     $formType = $_POST['insert-into-cart'];

//     // Perform actions based on the form that was clicked
//     if ($formType === 'phfp') {
//         $formSubmitted = 'phfp';
//         $price = 75;
//         $name = 'Prawn And Haddock Fish Pie';
//     } elseif ($formType === 'ss') {
//       $formSubmitted = 'ss';
//       $price=50;
//     } 
//   if(isset($_POST[$formSubmitted]))
//   {
//     $con = mysqli_connect('localhost:3307', 'root', '', 'oceanbites');
//     if($con){
//       $insertdata = INSERT INTO `additems` (ID,NAME,PRICE)VALUES (NULL,$name,$price);
//     }

//   }


// }
// }
// ?>
