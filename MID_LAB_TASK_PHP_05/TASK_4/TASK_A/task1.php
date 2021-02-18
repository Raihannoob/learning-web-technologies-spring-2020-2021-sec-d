<?php
$radioVal = $_POST["gender"];

if($radioVal == "male")
{
    echo"Gender: male";
}
else if ($radioVal == "female")
{
    echo("Gender: female");
}
else if ($radioVal == "other")
{
    echo("Gender: other");
}
?>