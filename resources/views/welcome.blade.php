<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>



        Incomplete tasks
        <table border="1">
            <thead>
                <th>Id</th>
                <th>IS completed</th>
                <th>created at</th>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <td>{{$task->task}}</td>
                <td>{{$task->iscompleted}}</td>
                <td>{{$task->created_at}}</td>

                @endforeach
            </tbody>

        </table>
        Complete task
        <table border="1">
            <thead>
                <th>Id</th>
                <th>IS completed</th>
                <th>created at</th>
            </thead>
            <tbody>
                @foreach ($completed_tasks as $task_complete)
                <td>{{$task_complete->task}}</td>
                <td>{{$task_complete->iscompleted}}</td>
                <td>{{$task_complete->created_at}}</td>

                @endforeach
            </tbody>

        </table>


    </body>
</html>
