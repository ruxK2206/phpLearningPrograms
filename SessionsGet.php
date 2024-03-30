<?php


session_start();
$input = $_POST['decisn'];

if($input="ruxK")
{
    echo"You can proceed";
    if(isset($_SESSION['username']))
    {
    echo "Welcome ".$_SESSION['username'] = "Ronak";
    echo "Your favourite category is ".$_SESSION['FavCat'] = "Games";
    }
}
else
{


session_unset();
echo"You are not ronak";

}

?>
