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
<button type="button" onclick="location.href = '/'">Izveidot CV</button>
<br>
@foreach($results as $cv)
    {{ $cv->vards }} {{$cv->uzvards }}<br>
    Tālrunis: {{$cv->talrunis}}<br>
    Ēpasts: {{$cv->epasts}}<br>
    Adrese: {{$cv->valsts}}, {{$cv->pilseta}},<br>
    {{ $cv->iela }}<br>
    Pasta indekss: {{$cv->indekss }}<br>
    --------------------------------------<br>
    Izglītība <br>
    @for($i=0;$i<count($nosaukums);$i++)
        @if(!empty($nosaukums[$i]))
             {{$nosaukums[$i]}}<br>
            Fakultāte: {{ $fakultate[$i] }}<br>
            Izglitības līmenis: {{ $izglitibasLimenis[$i] }}<br>
            Statuss: {{$statuss[$i]}}<br>
            Papildus informācija:<br>
            {{$parIzglitibu[$i]}}<br>
            --------------------------------------<br>
        @endif
    @endfor
    Darba pieredze <br>
    @for($i=0;$i<count($darbs);$i++)
        @if(!empty($darbs[$i]))
            Darba vieta: {{ $darbs[$i] }}<br>
            Amats: {{ $amats[$i] }}<br>
            Slodze: {{ $slodze[$i] }}<br>
            Stāžs: {{$stazs[$i]}}<br>
            Papildus informācija: <br>
            {{ $parDarbu[$i] }}<br>
            --------------------------------------<br>
        @endif
    @endfor
    Darbā iegūtās prasmes <br>
    {{$cv->prasmes}}<br>
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
    Citas prasmes <br>
    {{$cv->citas_prasmes}}<br>
    Intereses <br>
    {{$cv->intereses}}<br>
    Papildus info <br>
    {{$cv->papildus_info}}<br>
    <form method="post">
        @csrf
        <input name="delete_id" value="{{ $cv->id }}" type="hidden">
        <input class="button" type="submit" name="delete" value="Delete">
    </form>
    <form method="post">
        @csrf
        <input name="edit_id" value="{{ $cv->id }}" type="hidden">
        <input class="button" type="submit" name="edit" value="Edit">
    </form>
@endforeach
<div style="height: 100px">
    {{ $results->links() }}
</div>
</body>
</html>
