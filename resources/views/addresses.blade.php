@include ('layouts.header')


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
