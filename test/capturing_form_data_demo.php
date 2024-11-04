<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <form action="capturing_form_receiver_demo.php" method="post">
        <label for="txtFirstName">First Name</label>
        <input type="text" name="txtFirstName" id="txtFirstName" autofocus><br>
        <label for="txtLastName">Last Name</label>
        <input type="text" name="txtLastName" id="txtLastName"><br>

        <input type="radio" name="radSex" id="radMale" value="Male" checked>
        <label for="radMale">Male</label>
        <input type="radio" name="radSex" id="radFemale" value="Female">
        <label for="radFemale">Female</label><br>

        <button type="submit" name="btnSend">Send</button>
    </form>
</body>
</html>