<!DOCTYPE html>
<html>
    <title>
        AIUB
    </title>
    <body>
        <center>
        <h1 style="color: blue;">AIUB</h1>
        <h2 style="color: blue;">Registration Form</h2>
        </center>

        <h3> <b>Complete the Registration </b> </h3>


        <table>
            <tr>
                <td>Full Name:</td> <td><input type="text"> <br></td>
            </tr>
            <tr>
                <td>Email:</td> <td><input type="text"> <br></td>
            </tr>
            <tr>
                <td>Password:</td> <td><input type="text"> <br></td>
            </tr>
            <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="des"> Male
                <input type="radio" name="des"> Other
            </td>
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
                <td>Date of Birth:</td>
                <td><input type="date"> <br></td>
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