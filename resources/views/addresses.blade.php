@include ('layouts.header')


<body>


    @foreach ($addresses as $address)

        <div class="flex-center">
            <ul>
                <li>{{$address->zip}} {{$address->city}} {{$address->street_name}} {{$address->street_number}} <hr> </li>
            </ul>
        </div>

    @endforeach


    {{ $addresses->links() }}


</body>
</html>
