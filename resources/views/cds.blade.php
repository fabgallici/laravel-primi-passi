@extends('layouts.base_layout')

@section('content')

<body>
    <div class="container">
        <header>
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>

        <div class="cds-container">
            @foreach($database as $cd)

            <div class="cd">
                <img src="{{ $cd['poster'] }}" />

                <h3>{{ $cd['title'] }}</h3>
                <small>{{ $cd['author'] }}</small>
                <strong>{{ $cd['year'] }}</strong>
            </div>
            @endforeach
        </div>
        
    </div>
</body>

</html>

@endsection