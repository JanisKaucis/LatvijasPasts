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
    @csrf
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
    <label for="valsts">Valsts</label>
    <input type="text" name="valsts" id="valsts">
    <label for="indekss">Pasta indekss</label>
    <input type="text" name="indekss" id="indekss">
    <br>
    <label for="pilseta">Pilseta</label>
    <input type="text" name="pilseta" id="pilseta">
    <label for="iela">Iela</label>
    <input type="text" name="iela" id="iela">
    <br>
    Izglītības iestādes
    <br>
    <div id="izglitiba" style="display: none">
        <label for="izglitibasNosaukums">Iestādes nosaukums</label>
        <input type="text" name="izglitibasNosaukums" id="izglitibasNosaukums">
        <label for="fakultate">Fakultāte</label>
        <input type="text" name="fakultate" id="fakultate">
        <br>
        <label for="izglitibasLimenis">Izglītības lImenis</label>
        <input id="izglitibasLimenis" type="text" name="izglitibasLimenis">
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
        <label for="cits">Cita informācija</label>
        <br>
        <textarea id="cits" name="parIzglitibu" rows="4" cols="30">
        </textarea>
        <br>
        <input type="button" value="Noņemt izglitibu"
               onclick="this.parentNode.parentNode.removeChild(this.parentNode);"/>
    </div>
    <span id="addIzglitiba"></span>
    <input type="button" onclick="addIzglitiba()" value="Pievienot izglitibu"/>
    <br>
    <div id="darbs" style="display: none">
        <label for="darbaNosaukums">Darbavietas nosaukums</label>
        <input id="darbaNosaukums" type="text" name="darbaNosaukums">
        <br>
        <label for="amats">Ieņemamais amats</label>
        <input id="amats" type="text" name="amats">
        <br>
        <label for="slodze">Slodze</label>
        <input id="slodze" type="text" name="slodze">
        <label for="stazs">Darba stāžs</label>
        <input id="stazs" type="text" name="stazs">
        <br>
        <label for="cits">Cita informācija</label>
        <br>
        <textarea id="cits" name="parDarbu" rows="4" cols="30">
        </textarea>
        <br>
        <input type="button" value="Noņemt darbu"
               onclick="this.parentNode.parentNode.removeChild(this.parentNode);"/>
    </div>
    <span id="addDarbs"></span>
    <input type="button" onclick="addDarbs()" value="Pievienot darbu"/>
    <br>
    <label for="prasmes">Darba vietās pielietotās prasmes vai sasniegumi</label>
    <br>
    <textarea id="prasmes" name="prasmes" rows="4" cols="30">
    </textarea>
    <br>
    <div id="valoda" style="display: none">
        <label for="valoda">Valodas nosaukums</label>

        <input id="valoda" type="text" name="valoda">
        <br>
        Līmenis
        <input type="radio" id="viens" name="valodasLimenis" value="viens">
        <label for="viens">1</label>
        <input type="radio" id="divi" name="valodasLimenis" value="divi">
        <label for="divi">2</label>
        <input type="radio" id="tris" name="valodasLimenis" value="tris">
        <label for="tris">3</label>
        <input type="radio" id="cetri" name="valodasLimenis" value="cetri">
        <label for="cetri">4</label>
        <input type="radio" id="pieci" name="valodasLimenis" value="pieci">
        <label for="pieci">5</label>
        <br><input type="button" value="Noņemt valodu"
                   onclick="this.parentNode.parentNode.removeChild(this.parentNode);"/>

    </div>
    <span id="addValoda"></span>
    <input type="button" onclick="addValoda()" value="Pievienot valodu"/>
    <br>
    <label for="citasPrasmes">Citas prasmes</label>
    <br>
    <textarea id="citasPrasmes" name="citasPrasmes" rows="4" cols="30">
    </textarea>
    <br>
    <label for="intereses">Intereses</label>
    <br>
    <textarea id="intereses" name="intereses" rows="4" cols="30">
    </textarea>
    <br>
        <label for="papildusInfo">Papildus informācija</label>
        <br>
        <textarea id="papildusInfo" name="papildusInfo" rows="4" cols="30">
    </textarea>
        <br>
    <input id="create" type="submit" name="create" value="Izveidot CV">
</form>
<script src="{{asset('js/addFields.js')}}">
</script>
</body>
</html>
