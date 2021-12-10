<?php

?>

<!DOCTYPE>
<html>
    <head>
            <meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE-edge">
			<meta name="viewport" content="width=device-width" initial-scale="1.0">
			<title>Admin Functions</title>

            <style>
        


              .admin {
                    background-color: #ff8c52;
                    border: 2px solid;
                    color: white;
                    padding: 5px 10px;
                    text-align: center;
                    display: inline-block;
                    font-size: 20px;
                    margin: 10px 30px;
                    cursor: pointer;
                    text-decoration:none;
                    }
                    .container{
                        width: 400px;
                        margin-left: auto;
                        margin-right: auto;

                    }
            </style>

    </head>


<body>
    <div id= "container">
    <form>
        <label for="Functions">Choose an option:</label>

            <a href="signupViewCustomer.php"  class= "admin">Create Customer</a>
            <a href="signupViewClerk.php" class="admin">Create Clerk</a>
            <a href="createGoodView.php"class="admin">Create Good</a>
            <a href="createPaymentView.php"class="admin">Create Payment</a>
            <a href="createTransportView.php" class="admin">Create Transport</a>
    <hr>
            <a href="editcustomernameView.php"class="admin">Edit Customer Information</a>
            <a href="editGoodWeightView.php" class="admin">Edit Good Information</a>
            <a href="editPaymentView.php" class="admin">Edit Payment Information</a>
            <a href="editTransportView.php" class="admin">Edit Transport</a>
    <hr>
            <a href="deleteGoodView.php" class="admin">Delete Good</a>
            <a href="customerInformation.php" class="admin">Generate User Information</a>


        </body>
    </div>
    </html>