<!DOCTYPE html>
<html>
    <style>
        body {
            background-color: lightblue;
        }
        h1 {
            color: darkblue;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        h2 {
            color: darkblue;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            background-color: white;
            margin: 0px;
            border: 2px solid lightgrey;
            padding: 2px;
        }
    </style>
<body>
    <h1>Bank Management System</h1>
    <h2>Your Trusted Financial Partner</h2>
    <h3 style="color: black; font-family: Arial, Helvetica, sans-serif;"><b>Customer Registration Form</b></h3>   
    <table>
            <tr>
                <td>Full Name:</td> <td><input type="text"> <br></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date"> <br></td>
            </tr>
            <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="des"> Male
                <input type="radio" name="des"> Female
                <input type="radio" name="des"> Other
            </td>
            </tr>
            <tr>
                <td>Marital Status:</td>
                <td>
                    <select>
                        <option value="">Single</option>
                        <option value="">Married</option>
                        <option value="">Divorced</option>
                        <option value="">Widowed</option>
                    </select> <br>
                </td>
            </tr>
            <tr>
                <td>Email:</td> <td><input type="text"> <br></td>
            </tr>
            <tr>
                <td>Password:</td> <td><input type="text"> <br></td>
            </tr>
            

            <tr>
            <td>Language Known:</td>
                <td>
                    <input type="radio" name="des"> English
                    <input type="radio" name="des"> Bangla
                    <input type="radio" name="des"> Hindi <br>
            </td>
            </tr>

            <tr>
                <td>Country:</td>
                <td>
                    <select>
                        <option value="">--Select--</option>
                        <option value="">Bangladesh</option>
                        <option value="">Japan</option>
                        <option value="">USA</option>
                    </select> <br>
                </td>
            </tr>

            

        <tr>
            <td>Upload Photo:</td>
            <td><input type="file"> <br></td>
        </tr>

        <tr>
            <td>Comments:</td>
            <td><textarea rows="4" cols="30"></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="button" value="Register"></td>
        </tr>
        </table>
</body>
</html>