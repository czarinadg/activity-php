<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types Demo</title>
</head>
<body>
    <form> 
        <label for="txtFirstName">First Name:</label>
        <input type="text" name="txtFirstName" id="txtFirstName" autofocus><br>

        <label for="txtLastName">Last Name:</label>
        <input type="text" name="txtLastName" id="txtLastName"><br>

        <label for="textPassword">Password:</label>
        <input type="password" name="textPassword" id="textPassword"><br>

        <input type="submit" name="btnSave" value="Send">
        
        <!-- <button type="submit" name="btnSave2">Send 2</button> -->
         
        <input type="reset" name=""><br>
         
        <input type="radio" name="radSex" id="radMale" value="Male" checked>
        <label for="radMale">Male</label><br>
        <input type="radio" name="radSex" id="radFemale" value="Female">
        <label for="radFemale">Female</label><br>

        <input type="checkbox" name="chkBike" id="chkBike" value="Bike">
        <label for="chkBike">I have a bike.</label><br>
        <input type="checkbox" name="chkCar" id="chkCar" value="Bike">
        <label for="chkCar">I have a Car.</label><br>
        <input type="checkbox" name="chkBoat" id="chkBoat" value="Bike">
        <label for="chkBoat">I have a Boat.</label><br>

        <label for="clrTheme">Pick a color:</label>
        <input type="color" name="clrTheme" id="clrTheme"><br>

        <label for="dtpBirthday">Birthday: </label>
        <input type="date" name="dtpBirthday" id="dtpBirthday" value="2000-01-01"><br>

        <label for="txtEmail">Email Address:</label>
        <input type="email" name="txtEmail" id="txtEmail"><br>

        <label for="filPhoto">Select a file:</label>
        <input type="file" name="filPhoto" id="filPhoto"><br>

        <label for="txtNumber">Number:</label>
        <input type="number" name="txtNumber" id="txtNumber" min="1" max="5"><br>

        <label for="txtVolume">Select Volume:</label>
        <input type="range" name="txtVolume" id="txtVolume" min="0" max="100"><br>

        <label for="txtTelephone">Enter Telephone:</label>
        <input type="tel" name="txtTelephone" id="txtTelephone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br>

        <label for="txtTime">Select Time:</label>
        <input type="time" name="txtTime" id="txtTime"><br>

        <label for="txtURL">Add URL:</label>
        <input type="url" name="txtURL" id="txtURL"><br>
    </form>
</body>
</html>