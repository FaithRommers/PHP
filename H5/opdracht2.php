<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dier kiezen</title>
</head>


<body>
    <form action="opdracht2Verwerk.php" method="POST">
        <label for="dier">Kies een dier:</label>
        <select name="dier" id="dier">
            <option value="hond">Hond</option>
            <option value="kat">Kat</option>
            <option value="vogel">Vogel</option>
            <option value="vis">Vis</option>
        </select>
        <input type="submit" value="Verstuur">
    </form>
</body>
</html>

