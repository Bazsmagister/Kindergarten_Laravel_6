<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @foreach ($students as $student)

        <div>
            <ul>
                <li>{{$student->first_name}} {{$student->last_name}} </li>
            </ul>
        </div>

    @endforeach


</body>
</html>
