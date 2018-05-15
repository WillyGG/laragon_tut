<!DOCTYPE HTML>

<html>
    <head>
        <title> </title>
    </head>

    <body>
        <h1> Got Shit to Do! </h1>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="/tasks/{{$task->id}}">
                        {{ $task->title}}
                    </a>
                </li>
            @endforeach
        </ul>

    </body>

</html>
