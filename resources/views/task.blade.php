<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $name ?? 'non'}}</title>
    </head>
    <style>
        body{
            text-align: center;
        }
    </style>
    <body>
        {{-- <h1>
            {{ $id }}<=====>{{ $task }}
        </h1>
        <h2>
            Welcom in task #{{ $id }}
        </h2> --}}<h2>
        Id:{{ $tasks->id }}
        <br>
        Name:{{ $tasks->name }} {{ $tasks->nothernaem }}
        <br>
        Date:{{ $tasks->created_at }}
        <br>
        Updeate:{{ $tasks->updated_at }}
        <br>
        </h2>
    </body>
</html>
