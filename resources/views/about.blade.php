<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About</title>
        <style>
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Welcom in about view</h1>
        {{-- <h2>{{ $name }}</h2>
        <h2>{{ $age }}</h2> --}}
        {{-- @foreach ($tasks as $index => $task)
            <ul>
                <li>
                    {{ ++$index }} - {{ $task }}
                </li>
            </ul>
        @endforeach --}}
        @foreach ($tasks as /*$index =>*/ $task)
        <ul>
            <li>
                <a href="/task/{{ $task->name }}">
                    {{ $task->name }}
                </a>
            </li>
        </ul>
        @endforeach
    </body>
</html>

