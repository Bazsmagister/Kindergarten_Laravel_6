@include ('includes.head')


<body>


    @foreach ($students as $student)

        <div>
            <ul>
                <li>{{$student->first_name}} {{$student->last_name}} </li>
            </ul>
        </div>

    @endforeach


</body>

<footer >
    @include ('includes.footer')
</footer>

</html>
