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
            position: static;
            display: inline-block;
        }
        .btn {
            background-color: #007fff;
            color: white;
            padding: 10px;
            border: none;
            margin: 1px;
            z-index: 1;;
        }
        #overflow{
            overflow : auto;
            background-color: white;
            width: 15%;
            height: 50px;
            margin: 2px;
            padding: 2px;
            border: 0px;
            outline: 1px solid orangered;
            z-index: 1;
        }
    </style>

<body>
    <h1>Bank Management System</h1>
    <h2>Your Trusted Financial Partner</h2>
    <h3 style="color: black; font-family: Arial, Helvetica, sans-serif;"><b>Customer Registration Form</b></h3>
    <div>   
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
                <td>Account Type:</td>
                <td>
                    <select>
                        <option value="">Saving</option>
                        <option value="">Current</option>
                        <option value="">Fixed Deposit</option>
                    </select> <br>
                </td>
            </tr>
            <tr>
                <td>Initial Deposit Amount:</td> <td><input type="text"> <br></td>
            </tr>
            <tr>
                <td>Mobile Number:</td> <td><input type="text"> <br></td>
            </tr>
            <tr>
                <td>Email Address:</td> <td><input type="text"> <br></td>
            </tr>
            <tr>
            <td>Address:</td>
                <td><textarea rows="2" cols="15"></textarea></td>
            </tr>
            <tr>
                <td>Occupation:</td> <td><input type="text"> <br></td>
            </tr>
            <tr>
                <td>National ID (NID):</td> <td><input type="text"> <br></td>
            </tr>
            <tr>
            <tr>
                <td>Set Password:</td> <td><input type="password"> <br></td>
            </tr>
            <tr>
                <td>Upload ID Proof:</td>
                <td><input type="file"> <br></td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox"> I agree to the terms and conditions
            </td>
            </tr>
        <tr>
            <td></td>
            <td >
                <input class="btn" type="button" value="Register">
                <input class="btn" type="button" value="Reset">
            </td>
        </tr>
        </table>
        </div>
        <div id="overflow">
            Thank you for choosing our bank. We are committed to providing you with the best financial services.   
        </div>
</body>
</html>