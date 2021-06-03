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
<button type="button" onclick="location.href = 'view'">Visi CV</button>
<form id="forma" method="post">
    @csrf
    <label for="vards">Vārds</label>
    <input type="text" name="vards" id="vards" value="{{ $vards }}">
    <label for="uzvards">Uzvārds</label>
    <input type="text" name="uzvards" id="uzvards" value="{{ $uzvards }}">
    <br>
    <label for="talrunis">Tālrunis</label>
    <input type="text" name="talrunis" id="talrunis" value="{{$talrunis}}">
    <label for="epasts">Epasts</label>
    <input type="text" name="epasts" id="epasts" value="{{$epasts}}">
    <br>
    <label for="valsts">Valsts</label>
    <input type="text" name="valsts" id="valsts" value="{{$valsts}}">
    <label for="indekss">Pasta indekss</label>
    <input type="text" name="indekss" id="indekss" value="{{$indekss}}">
    <br>
    <label for="pilseta">Pilseta</label>
    <input type="text" name="pilseta" id="pilseta" value="{{$pilseta}}">
    <label for="iela">Iela</label>
    <input type="text" name="iela" id="iela" value="{{$iela}}">
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
            <option value="mācības pabeigtas">Mācības pabeigtas</option>
            <option value="mācības partrauktas">Mācības pārtrauktas</option>
            <option value="mācās 1.kursā">Mācās 1.kursā</option>
            <option value="mācās 2.kursā">Mācās 2.kursā</option>
            <option value="mācās 3.kursā">Mācās 3.kursā</option>
            <option value="mācās 4.kursā">Mācās 4.kursā</option>
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
    @if(!empty($izglitiba))
        @for($i=0;$i<count($izglitiba);$i++)
            @if(!empty($izglitiba[$i]))
                <label for="izglitibasNosaukums">Iestādes nosaukums</label>
                <input type="text" name="izglitibasNosaukums{{$i+1}}" id="izglitibasNosaukums" value="{{$izglitiba[$i]}}">
                <label for="fakultate">Fakultāte</label>
                <input type="text" name="fakultate{{$i+1}}" id="fakultate" value="{{$fakultate[$i]}}">
                <br>
                <label for="izglitibasLimenis">Izglītības lImenis</label>
                <input id="izglitibasLimenis" type="text" name="izglitibasLimenis{{$i+1}}" value="{{$izglitibasLimenis[$i]}}">
                <label for="statuss">Mācību statuss</label>
                <select id="statuss" name="statuss{{$i+1}}">
                    <option value="mācības pabeigtas">Mācības pabeigtas</option>
                    <option value="mācības partrauktas">Mācības pārtrauktas</option>
                    <option value="mācās 1.kursā">Mācās 1.kursā</option>
                    <option value="mācās 2.kursā">Mācās 2.kursā</option>
                    <option value="mācās 3.kursā">Mācās 3.kursā</option>
                    <option value="mācās 4.kursā">Mācās 4.kursā</option>
                </select>
                <br>
                <label for="cits">Cita informācija</label>
                <br>
                <textarea id="cits" name="parIzglitibu{{$i+1}}" rows="4" cols="30">{{$parIzglitibu[$i]}}
        </textarea>
                <br>
            @endif
        @endfor
    @endif
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
    @if(!empty($darbs))
        @for($i=0;$i<count($darbs);$i++)
            @if(!empty($darbs[$i]))
                <label for="darbaNosaukums">Darbavietas nosaukums</label>
                <input id="darbaNosaukums" type="text" name="darbaNosaukums{{$i+1}}" value="{{$darbs[$i]}}">
                <br>
                <label for="amats">Ieņemamais amats</label>
                <input id="amats" type="text" name="amats{{$i+1}}" value="{{$amats[$i]}}">
                <br>
                <label for="slodze">Slodze</label>
                <input id="slodze" type="text" name="slodze{{$i+1}}" value="{{$slodze[$i]}}">
                <label for="stazs">Darba stāžs</label>
                <input id="stazs" type="text" name="stazs{{$i+1}}" value="{{$stazs[$i]}}">
                <br>
                <label for="cits">Cita informācija</label>
                <br>
                <textarea id="cits" name="parDarbu{{$i+1}}" rows="4" cols="30">{{$parDarbu[$i]}}
        </textarea>
                <br>
            @endif
        @endfor
    @endif
    <span id="addDarbs"></span>
    <input type="button" onclick="addDarbs()" value="Pievienot darbu"/>
    <br>
    <label for="prasmes">Darba vietās pielietotās prasmes vai sasniegumi</label>
    <br>
    <textarea id="prasmes" name="prasmes" rows="4" cols="30">{{$prasmes}}
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
        <input type="radio" id="tris" name="valodasLimenis" value="tris" checked />
        <label for="tris">3</label>
        <input type="radio" id="cetri" name="valodasLimenis" value="cetri">
        <label for="cetri">4</label>
        <input type="radio" id="pieci" name="valodasLimenis" value="pieci">
        <label for="pieci">5</label>
        <br><input type="button" value="Noņemt valodu"
                   onclick="this.parentNode.parentNode.removeChild(this.parentNode);"/>

    </div>
    @if(!empty($valoda))
        @for($i=0;$i<count($valoda);$i++)
            @if(!empty($valoda[$i]))
                <label for="valoda">Valodas nosaukums</label>
                <input id="valoda" type="text" name="valoda{{$i+1}}" value="{{$valoda[$i]}}">
                <br>
                Līmenis
                <input type="radio" id="viens" name="valodasLimenis{{$i+1}}" value="viens">
                <label for="viens">1</label>
                <input type="radio" id="divi" name="valodasLimenis{{$i+1}}" value="divi">
                <label for="divi">2</label>
                <input type="radio" id="tris" name="valodasLimenis{{$i+1}}" value="tris" checked>
                <label for="tris">3</label>
                <input type="radio" id="cetri" name="valodasLimenis{{$i+1}}" value="cetri">
                <label for="cetri">4</label>
                <input type="radio" id="pieci" name="valodasLimenis{{$i+1}}" value="pieci">
                <label for="pieci">5</label>
                <br>
            @endif
        @endfor
    @endif
    <span id="addValoda"></span>
    <input type="button" onclick="addValoda()" value="Pievienot valodu"/>
    <br>
    <label for="citasPrasmes">Citas prasmes</label>
    <br>
    <textarea id="citasPrasmes" name="citasPrasmes" rows="4" cols="30">{{$citasPrasmes}}
    </textarea>
    <br>
    <label for="intereses">Intereses</label>
    <br>
    <textarea id="intereses" name="intereses" rows="4" cols="30">{{$intereses}}
    </textarea>
    <br>
    <label for="papildusInfo">Papildus informācija</label>
    <br>
    <textarea id="papildusInfo" name="papildusInfo" rows="4" cols="30">{{$papildusInfo}}
    </textarea>
    <br>
    <input id="create" type="submit" name="create" value="Izveidot CV">
</form>
<script src="{{asset('js/addFields.js')}}">
</script>
</body>
</html>
