<!DOCTYPE html>
<html>
<head>
    <title>Donation Form</title>
    <link rel="stylesheet" href="task_3_style.css">
    <link rel="validation" href="task_3_valid.js">
</head>
<body>
    <div class="form-container">
    <form>
        <label id="form-label"><b>Donation Form</b></label><br>
        <label class="labels" for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" required><br>
        <label class="labels" for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname" required><br>
        <label class="labels" for="address">Address:</label><br>
        <input type="text" id="address" name="address" required><br>
        <label class="labels" for="city">City:</label><br>
        <input type="text" id="city" name="city" required><br>
        <label class="labels" for="state">State:</label><br>
        <select name="state" id="state"><br>
            <option value=""></option>
            <option value="Dhaka">Dhaka</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Khulna">Khulna</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Barisal">Barisal</option>
            <option value="Sylhet">Sylhet</option>
        </select><br>
        <label class="labels" for="phone">Phone:</label><br>
        <input class="form-control" type="text" id="phone" name="phone" required><br>
        <label class="labels" for="email">Email:</label><br>
        <input class="form-control" type="email" id="email" name="email" required><br>
        <label class="labels" for="createpass">Create Password:</label><br>
        <input class="form-control" type="password" id="createpass" name="createpass" required><br>
        <label class="labels" for="confirmpass">Confirm Password:</label><br>
        <input class="form-control" type="password" id="confirmpass" name="confirmpass" required><br>
        <label class="labels" for="donation">Donation Amount:</label><br>
        <input type="radio" id="donation" name="none" required>None
        <input type="radio" id="donation" name="500" required>500 BDT
        <input type="radio" id="donation" name="1000" required>1000 BDT
        <input type="radio" id="donation" name="2000" required>2000 BDT
        <input type="radio" id="donation" name="3000" required>3000 BDT
        <input type="radio" id="donation" name="other" required>Other <br>
        <label class="labels" for="other_amount">Other Amount:</label><br>
        <input type="number" id="other_amount" name="other_amount"><br>
        <label class="labels" for="payment">Payment Method</label><br>
        <input type="radio" id="payment" name="payment" value="cash" required> Cash
        <input type="radio" id="payment" name="payment" value="bkash" required> Bkash
        <input type="radio" id="payment" name="payment" value="nagad" required> Nagad <br>
        <input type="checkbox" id="Cbox" name="cbox1"> Terms & Conditions Check <br>
        <input type="checkbox" id="Cbox" name="cbox2"> I am interested in giving regular basis <br>
        <label id="addition"><b>Additional Information</b></label><br>
        <input type="checkbox" id="Cbox" name="cbox3"> I would like my gift remain anonymous <br>
        <input type="checkbox" id="Cbox" name="cbox4"> My employer offer a matching gift program <br>
        <input type="checkbox" id="Cbox" name="cbox5"> Please don't send a thank you later <br>
        <textarea name="txtarea" id="txtarea" rows="2" cols="70"></textarea><br>
        <button id="submit" type="submit">Submit</button>
        <button id="reset" type="reset">Reset</button>
    </form>
</div>
</body>
</html>