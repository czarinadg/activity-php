<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form Elements</title>
</head>
<body>
    <form>
        <input type="" name="">
       
        <hr>
       
        <select name="drpCars">
            <option value="Volvo">Volvo</option>
            <option value="Saab">Saab</option>
            <option value="Fiat" selected>Fiat</option>
            <option value="Audi">Audi</option>
            <option value="Toyota">Toyota</option>
            <option value="Honda">Audi</option>
            <option value="Suzuki">Suzuki</option>
        </select>

        <hr>

        <textarea name="txtPost" rows="10" cols="30"></textarea>

        <hr>

        <button type="button">Click Me!</button>
        
        <hr>

        <fieldset>
            <legend>Personal Information</legend>
            First Name <input type="" name=""><br>
            Last Name <input type="" name=""><br>
        </fieldset>

        <hr>

        <input type="text" name="dlstBrowsers" list="browsers">
        <datalist id="browsers">
             <option value="Mozilla Firefox">
             <option value="Microsoft Edge">
             <option value="Google Chrome">
             <option value="Opera">
             <option value="Safari">
        </datalist>
    </form>
</body>
</html>