<?php
$uname  = $_POST ["uname"];
$tel  = $_POST ["tel"];
$em  = $_POST ["em"];
$pass  = $_POST ["pass"];
$cpass  = $_POST ["cpass"];

if (empty ($uname) || !ctype_alpha ($uname))
{
     $error[1] = "You must enter name or Error Name";
     $uname =" ";
}

if ( ( empty ($tel) )  )
{
     $error[2] = "You must enter tel";
}

if ( ( empty ($em) )  )
{
     $error[3] = "You must enter Email";
}

if ( ( empty ($pass) )  )
{
     $error[4] = "You must enter password";
}

if ( ( empty ($cpass) )  )
{
     $error[5] = "You must enter comfirm password";
}

if ($pass != $cpass) 
{
     $error[6] = "The password and comfirm password not equal";
}


if ( !empty ($error) )
{
         foreach( $error as $value)
           echo(" $value <br /> "); 
                 // include('Registration.html');

}
else
//include('Registration.html');
echo("Congratulation; you are registered ..");

?>
