<div id="container--getPetsById">
    <h1>Pet by ID</h1>
    @if(isset($petsByID) && count($petsByID) > 0)
            @foreach($petsByID as $pet)         
                <p><b>{{ $pet['name'] ?? 'No name' }}</b></p>
                {{ var_dump($pet) }}
            @endforeach
    @else
        <p>No pets available or an error occurred.</p>
    @endif

    @if($errors->any())
        <div>
            <strong>Error:</strong> {{ $errors->first('error') }}
        </div>
    @endif

    </div>