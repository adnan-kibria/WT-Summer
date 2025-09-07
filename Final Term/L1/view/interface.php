<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <link rel="stylesheet" href="../css/style.css"></link>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="../php/info.php" method="POST" id="data">
                <div class="temp">
                    <label for="name">Full Name</label><br>
                    <input type="text" id="name" name="name" placeholder="Enter full name"><br>
                    <span class="error" id="name-error"></span>
                </div>
                <div class="temp">
                    <label for="username">Username</label><br>
                    <input type="text" id="username" name="username" placeholder="Enter username"><br>
                    <span class="error" id="username-error"></span>
                </div>
                <div class="temp">
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="email" placeholder="example@example.com"><br>
                    <span class="error" id="email-error"></span>
                </div>
                <div class="temp">
                    <label for="createpass">Create Password</label><br>
                    <input type="password" id="createpass" name="createpass" placeholder="Enter password"><br>
                    <span class="error" id="createpass-error"></span>
                </div>
                <div class="temp">
                    <label for="confirmpass">Confirm Password</label><br>
                    <input type="password" id="confirmpass" name="confirmpass" placeholder="Re-enter password"><br>
                    <span class="error" id="confirmpass-error"></span>
                </div>
                <button type="submit" id="store">Store</button>
            </form>
            <div class="btn-temp">
                <button type="button" id="update">Update</button>
                <button type="button" id="delete">Delete</button>
                <button type="button" id="refresh">Refresh Data</button>
            </div>
        </div>
        <div class="show">
            <h2>Stored User Data</h2>
            <div id="message"></div>
            <table id="user-class">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="user-data">

                </tbody>
            </table>
        </div>
    </div>
    <script src="../js/validation.js"></script>
</body>
</html>