<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/showCV.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<button type="button" onclick="location.href = '/'">Izveidot CV</button>
<button type="button" onclick="location.href = '/view'">Parvaldit CV</button>
<br>
<div class="center">
    <div class="left thick large">
            {{ $vards }} {{$uzvards }}
    </div>
        <span class="right">
        Tālrunis: {{$talrunis}}<br>
        Ēpasts: {{$epasts}}<br>
        Adrese: {{$valsts}}, {{$pilseta}},<br>
        {{ $iela }}<br>
        Pasta indekss: {{$indekss }}<br><br>
    Valodas zināšanas <br>
            @if(!empty($valoda))
    @for($i=0;$i<count($valoda);$i++)
            @if(!empty($valoda[$i]))
                {{$valoda[$i]}}
                @if($valodasLimenis[$i] == 'viens')
                    ★☆☆☆☆
                @elseif($valodasLimenis[$i] == 'divi')
                    ★★☆☆☆
                @elseif($valodasLimenis[$i] == 'tris')
                    ★★★☆☆
                @elseif($valodasLimenis[$i] == 'cetri')
                    ★★★★☆
                @elseif($valodasLimenis[$i] == 'pieci')
                    ★★★★★
                @endif
                <br>
            @endif
        @endfor
            @endif
        </span>

    <hr>
    Izglītība <br>
    <hr>
    @if(!empty($izglitiba))
    @for($i=0;$i<count($izglitiba);$i++)
        @if(!empty($izglitiba[$i]))
            {{$izglitiba[$i]}}<br>
            Fakultāte: {{ $fakultate[$i] }}
            Izglitības līmenis: {{ $izglitibasLimenis[$i] }}<br>
            Statuss: {{$statuss[$i]}}<br>
            Papildus informācija:<br>
            {{$parIzglitibu[$i]}}<br>
            <hr>
        @endif
    @endfor
    @endif
    Darba pieredze <br>
    <hr>
    @if(!empty($darbs))
    @for($i=0;$i<count($darbs);$i++)
        @if(!empty($darbs[$i]))
            Darba vieta: {{ $darbs[$i] }}
            Amats: {{ $amats[$i] }}
            Slodze: {{ $slodze[$i] }}<br>
            Stāžs: {{$stazs[$i]}}<br>
            Papildus informācija: <br>
            {{ $parDarbu[$i] }}<br>
            <hr>
        @endif
    @endfor
    @endif
    Darbā iegūtās prasmes <br>
    {{$prasmes}}<br>
    Citas prasmes <br>
    {{$citasPrasmes}}<br>
    <div class="left">
    Intereses
        <span class="right">
    Papildus info <br>
    {{$papildusInfo}}<br>
        </span>
        <br>
    {{$intereses}}

    </div>
</div>
</body>
</html>
