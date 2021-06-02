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
@foreach($results as $cv)
{{ $cv->vards }}
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
