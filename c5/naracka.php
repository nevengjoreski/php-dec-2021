<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naracka</title>
</head>
<body>

    <form action="naplata.php" method="POST">
        <h3>Glaven Obrok</h3>
        
        <input type="radio" name="glaven_obrok" value="hamburger" id="hamburger"/>
        <label for="hamburger">Hamburger</label>

        <br>
        
        <input type="radio" name="glaven_obrok" value="chicken" id="chicken"/>
        <label for="chicken">Chicken</label>

        <br>
        
        <input type="radio" name="glaven_obrok" value="hotdog" id="hotdog"/>
        <label for="hotdog">Hotdog</label>

        <h3>Dodatoci</h3>

        <input type="checkbox" name="dodatoci[]" value="pomfrit" id="pomfrit"/>
        <label for="pomfrit">Pomfrit</label>
        <br>

        <input type="checkbox" name="dodatoci[]" value="pavlaka" id="pavlaka"/>
        <label for="pavlaka">Pavlaka</label>

        <br>

        <input type="checkbox" name="dodatoci[]" value="pecurki" id="pecurki"/>
        <label for="pecurki">Pecurki</label>

        <h3>Sosovi</h3>

        
        <input type="checkbox" name="sosovi[]" value="kecap" id="kecap"/>
        <label for="kecap">Kecap</label>

        <br>

        <input type="checkbox" name="sosovi[]" value="majonez" id="majonez"/>
        <label for="majonez">Majonez</label>
        
        <br>

        <input type="checkbox" name="sosovi[]" value="senf" id="senf"/>
        <label for="senf">Senf</label>

        <br><br>

        <input type="submit" value="Naracaj" style="width:100%">


    </form>
    
</body>
</html>