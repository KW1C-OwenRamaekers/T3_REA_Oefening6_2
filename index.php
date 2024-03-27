<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steen, papier, schaar</title>
</head>
<body>
    <form>
        <label for="steen">Steen:</label>
        <input type="checkbox" name="steen" id="steen" onchange="document.getElementById('papier').checked = false; document.getElementById('schaar').checked = false;"><br>
        <label for="papier">Papier:</label>
        <input type="checkbox" name="papier" id="papier" onchange="document.getElementById('steen').checked = false; document.getElementById('schaar').checked = false;"><br>
        <label for="schaar">Schaar:</label>
        <input type="checkbox" name="schaar" id="schaar" onchange="document.getElementById('steen').checked = false; document.getElementById('papier').checked = false;"><br>
    </form>
</body>
</html>