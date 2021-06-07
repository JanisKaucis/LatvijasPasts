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
<br>
@foreach($results as $cv)
    <div class="center">
        <div class="left thick large">
    {{ $cv->vards }} {{$cv->uzvards }}<br>
        </div>
        <span class="right">
    Tālrunis: {{$cv->talrunis}}<br>
    Ēpasts: {{$cv->epasts}}<br>
    Adrese: {{$cv->valsts}}, {{$cv->pilseta}},<br>
    {{ $cv->iela }}<br>
    Pasta indekss: {{$cv->indekss }}<br><br>
             Valodas zināšanas <br>
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
            </span>
        <hr>
    Izglītība <br>
        <hr>
    @for($i=0;$i<count($nosaukums);$i++)
        @if(!empty($nosaukums[$i]))
             {{$nosaukums[$i]}}<br>
            Fakultāte: {{ $fakultate[$i] }}<br>
            Izglitības līmenis: {{ $izglitibasLimenis[$i] }}<br>
            Statuss: {{$statuss[$i]}}<br>
            Papildus informācija:<br>
            {{$parIzglitibu[$i]}}<br>
                <hr>
        @endif
    @endfor
    Darba pieredze <br>
        <hr>
    @for($i=0;$i<count($darbs);$i++)
        @if(!empty($darbs[$i]))
            Darba vieta: {{ $darbs[$i] }}<br>
            Amats: {{ $amats[$i] }}<br>
            Slodze: {{ $slodze[$i] }}<br>
            Stāžs: {{$stazs[$i]}}<br>
            Papildus informācija: <br>
            {{ $parDarbu[$i] }}<br>
                <hr>
        @endif
    @endfor
    Darbā iegūtās prasmes: <br>
    {{$cv->prasmes}}<br>

    Citas prasmes: <br>
    {{$cv->citas_prasmes}}<br>
        <div class="left">
    Intereses:
            <span class="right">

    Papildus info: <br>
    {{$cv->papildus_info}}<br>
                </span>
            <br>
            {{$cv->intereses}}<br>
        </div>
    <form method="post">
        @csrf
        <input name="delete_id" value="{{ $cv->id }}" type="hidden">
        <input class="button" type="submit" name="delete" value="Dzēst">
        <input class="button" type="submit" name="edit" value="Rediģēt">
        <input class="button" type="submit" name="show" value="Apskatīt CV">
    </form>
@endforeach
    {{ $results->links() }}
    </div>
</body>
</html>
