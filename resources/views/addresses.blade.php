<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    @foreach ($addresses as $address)

        <div>
            <ul>
                <li>{{$address->zip}} {{$address->city}} </li>
            </ul>
        </div>

    @endforeach


</body>
</html>
