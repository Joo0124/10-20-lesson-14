<?php

$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];



$uguulber = "Joo is the world best famous IT enginer";

if($email == "") {
    echo "Email hayag hooson baina";
    echo "<br>";
    die();
} else if($name == "") {
    echo "Ner hooson baina";
    echo "<br>";
    die();
} else if($message == "") {
    echo "Message hooson baina";
    echo "<br>";
    die();
}






// $formiing_medeelel = $_POST;
// $email_hayag = $formiing_medeelel['email'];

// print_r(  $email_hayag  );
// echo "<hr>";
// print_r(  $formiing_medeelel  );

//[
    //'email' => 'apprenticemn@gmail.com'
    //'name' => 'zerleg design'
    //'message' => 'tsrjgdjg gdfkgdk gdfkgkd'
 //];

?>
<!--    
<h1>
    <?php
        echo $uguulber
     ?>    
</h1>
-->

<h1><?php echo $name; ?> (<span class="badge bg-secondary"><?php echo $email; ?></span>) </h1>
<p><?php echo $message; ?></p>