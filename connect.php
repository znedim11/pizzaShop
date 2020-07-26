<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'id14463485_nedim', '2f8aG8G$+Td4/g2<','id14463485_pizza');

// get the post records
$Name = $_POST['cart-item-title'];
	$Price = $_POST['cart-price'];
	$Quantity = $_POST['cart-quantity'];
	$total = $_POST['total'];


$names = implode(" & ",$Name);
$prices = implode(" & ", $Price);
$quantities = implode(" & ", $Quantity);

// database insert SQL code
$sql = "INSERT INTO orders (`Name`, `Price`, `Quantity`, `Total`) VALUES ('$names', '$prices', '$quantities', '$total')";

    


// insert in database 
$rs = @mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}else {
            echo mysqli_error($con);
        }
?>