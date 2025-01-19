<div id="container--allPetsByStatus">

<h1>Available Pets</h1>
@if(isset($pets) && count($pets) > 0)
    <ul>
        @foreach($pets as $pet)
            <li>{{ $pet['name'] ?? 'No name' }} (ID: {{ $pet['id'] ?? 'N/A' }})</li>
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