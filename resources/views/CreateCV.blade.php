<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form id="forma" method="post">
    <label for="vards">Vārds</label>
    <input type="text" name="vards" id="vards">
    <label for="uzvards">Uzvārds</label>
    <input type="text" name="uzvards" id="uzvards">
    <br>
    <label for="talrunis">Tālrunis</label>
    <input type="text" name="talrunis" id="talrunis">
    <label for="epasts">Epasts</label>
    <input type="text" name="epasts" id="epasts">
    <br>
    <label for="adrese">Adrese</label>
    <input type="text" name="adrese" id="adrese">
    <br>
    Izglītības iestādes
    <br>
    <div id="izglitiba" style="display: none">
    <label for="nosaukums">Iestādes nosaukums</label>
    <input type="text" name="nosaukums" id="nosaukums">
    <label for="fakultate">Fakultāte</label>
    <input type="text" name="fakultate" id="fakultate">
    <br>
    <label for="limenis">Izglītības lImenis</label>
    <input id="limenis" type="text" name="limenis">
    <label for="statuss">Mācību statuss</label>
    <select id="statuss" name="statuss">
        <option value="pabeigts">Mācības pabeigtas</option>
        <option value="partraukts">Mācības pārtrauktas</option>
        <option value="macas1">Mācās 1.kursā</option>
        <option value="macas2">Mācās 2.kursā</option>
        <option value="macas3">Mācās 3.kursā</option>
        <option value="macas4">Mācās 4.kursā</option>
    </select>
        <br>
        <input type="button" value="Noņemt izglitibu"
               onclick="this.parentNode.parentNode.removeChild(this.parentNode);" />
    </div>
    <span id="addIzglitiba"></span>
    <input type="button" onclick="addIzglitiba()" value="Pievienot izglitibu" />
</form>
<script>
    var counter = 0;

    function addIzglitiba() {
        counter++;
        var newFields = document.getElementById('izglitiba').cloneNode(true);
        newFields.id = '';
        newFields.style.display = 'block';
        var newField = newFields.childNodes;
        for (var i=0;i<newField.length;i++) {
            var theName = newField[i].name
            if (theName)
                newField[i].name = theName + counter;
        }
        var insertHere = document.getElementById('addIzglitiba');
        insertHere.parentNode.insertBefore(newFields,insertHere);
    }

    window.onload = moreFields;
</script>
</body>
</html>
