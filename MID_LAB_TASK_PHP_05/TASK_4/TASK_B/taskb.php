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

<!DOCTYPE html>
<html>

<body>

    <form method="post" action="#">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other <br>

        </fieldset>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>