@include ('includes.head')
@include ('includes.header')


<body>


    @foreach ($addresses as $address)

        <div class="container">
            <ul>
                <li>{{$address->zip}} {{$address->city}} {{$address->street_name}} {{$address->street_number}} <hr> </li>
            </ul>
        </div>

    @endforeach


    {{ $addresses->links() }}




</body>

<footer >
    @include ('includes.footer')
</footer>

</html>
