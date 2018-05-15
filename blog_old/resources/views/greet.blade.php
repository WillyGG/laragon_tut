<!DOCTYPE HTML>

<html>
    <head>
        <title> </title>
    </head>

    <body>
        <h1> Orite lads! </h1>
        <ul>
            @foreach ($names as $name)
                <li> {{ $name }} </li>
            @endforeach
        </ul>

    </body>

</html>
