<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>



    <div class="row">

        <div  class="col-md-12">


        <?php

        $message = 'Good morning '.$_POST['Name'] .' '.$_POST['Firstname']. ', you have selected : '.$_POST['Object'] . ', and the message : '.$_POST['Message'] .' , your email is '.$_POST['Mailaddress'];

        echo $message;

        ?>

    <h1> WEll DONE!!</h1>
    <h2>you have been successfully registered, an email will be sent to you.</h2>


        </div>
    </div>


</body>
</html>