<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<!-- methods : GET / POST ///// default : GET -->
<!-- action : where to send the request //// default : same page -->

    <form action="login.php" method="POST">
        <label for="username">Username :</label>
        <input 
            type="text" 
            name="username" 
            id="username" 
            autocomplete="off"
            placeholder="Email or phone number"
            required
            pattern=".{5,}"
        >
        <br>
        <small>min 8 charachters</small>
        <br><br>      
        <label for="password">Password :</label>
        <input 
            type="password" 
            name="password" 
            id="password" 
            required
            pattern=".{8,}"
        >
        <br>
        <small>min 8 charachters</small>
        <br><br>
        <button type="submit">Log In</button>
    </form>
</body>
</html>