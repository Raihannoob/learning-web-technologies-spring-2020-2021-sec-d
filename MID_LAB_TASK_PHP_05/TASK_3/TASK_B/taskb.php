<?php

	

	if(isset($_POST['submit'])){

		$date 		= $_POST['day'];
        $month 		= $_POST['month'];
        $year 		= $_POST['year'];

		if($date == "" || $month == ""  || $year == "" ){
			echo "null submission...";
		}else{
			echo "Date:".$date;
            echo "Month:".$month;
            echo "Year:".$year;
		}

	}else{
		echo "invalid request...";
	}
?> 

<html>

<head>
    <title>Date of Birth Input</title>
</head>

<body>
    <form method="post" action=#>

        <fieldset>
            <legend><b>Date Of Birth</b></legend>
            <table>
                <tr>
                    <td>dd</td>
                    <td>mm</td>
                    <td>yyyy</td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="day" value="">/
                    </td>
                    <td>
                        <input type="text" name="month" value="">/
                    </td>
                    <td>
                        <input type="text" name="year" value="">
                    </td>

                </tr>

            </table>
            <hr width="50%" align="left">
            <input type="Submit" name="submit">


        </fieldset>

    </form>

</body>

</html>