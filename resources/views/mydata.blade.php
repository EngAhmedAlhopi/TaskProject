<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My Data</title>
        <style>
            *{
                margin: 0px;
            }
            body{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>
            My Private Data:
        </h1>
        <h2>@if($name == '')
            {{ '' }}
            @else
            <br>
            name ==> {{ $name }}
        @endif

            <br>
            @foreach ($datas as $key => $data )
                {{ $key }} ==> {{ $data }}
                <br>
                @if($key == 'major')
                @foreach ($phone as $k => $p)
                {{ $k }} ==> {{ $p }}
                <br>
                @endforeach
            @endif
            @endforeach
        </h2>
        <form action="store" method="post">
            @csrf
            <input type="text" id="fname" name="fname">
            <input type="submit" id="send" name="send">
        </form>
    </body>
</html>

            {{-- @if($key == 'phone')
                @foreach ($phone as $k => $p)
                {{ $k }} ==> {{ $p }}
                @endforeach
            @endif --}}
            {{-- <?php
            // if(is_array($key))
            // foreach ($key as $k => $value) {
            //     echo $value;
            // }
            ?> --}}









