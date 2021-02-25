
<!DOCTYPE html>
<html>
<head>
    <meta>
    <title>XCompany - Edit Profile</title>
</head>
<body>
    
    <table  border="2" width="60%">

        <tr >

            <td colspan="2">

                 <a href="dashboard.php"><img src="logo.png" alt="Logo"></a>


            
                <div
                 align="right">
                    
                <a href="Logout,php">Logout</a>
                    
                </div>

            </td>


        </tr>

        <tr>
            
            <td>
                <b>Account</b><hr>
                
                <ul>
                    
                    <a href="dashboard.php"><li>Dashboard</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="editprofile.php"><li>Edit Profile</li></a>
                    <a href="profilepicture.php"><li>Change Profile Picture</li></a>
                    <a href="changepassword.php"><li>Change Password</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
                </ul>
               
                
            </td>
            
            <td width=80%>
              
               <form action="editprofile.php" method="post">
                   
                   <fieldset>
                       
                       <legend><b>EDIT PROFILE</b></legend>
                       
                       Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name" value=""><hr>
                       Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email"><button title="hint:Sample@example.com"><b>i</b></button><hr>
                       Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                       <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="Other"> Other
                        <hr>
                        Date of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="date" value=""><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (dd/mm/yyyy) <hr>
                        
                        <input type="submit" name="submit" value="Submit">
                       
                   </fieldset>
                   
               </form>
                
            </td>
            
        </tr>

        <tr>

            <td colspan="2" align="center">
                <p>Copyright &#169; 2017</p>
            </td>

        </tr>

    </table>
    
</body>
</html>