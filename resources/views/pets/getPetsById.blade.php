<div id="container--getPetsById">
    <h1>Pet by ID</h1>
    @if(isset($petsByID) && count($petsByID) > 0)
        <ul>
            @foreach($petsByID as $pet)         
                <li>{{ $pet['name'] ?? 'No name' }}</li>
                {{ var_dump($pet) }}
            @endforeach
        </ul>
    @else
        <p>No pets available or an error occurred.</p>
    @endif

    @if($errors->any())
        <div>
            <strong>Error:</strong> {{ $errors->first('error') }}
        </div>
    @endif

    </div>