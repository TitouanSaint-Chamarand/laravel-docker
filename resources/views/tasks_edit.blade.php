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
<form action="{{url('tasks/edit/'. $tasks->id )}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$tasks->title}}">
    <input type="datetime-local" name="date" value="{{$tasks->end_date}}">

    <button type="submit">Envoyer</button>


</form>
<form action="{{url('tasks/delete/'. $tasks->id )}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Supprimer</button>
</form>

</body>
</html>
