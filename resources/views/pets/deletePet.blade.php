<div id="container--deletePet">
    <h1> Delete Pet id=1 </h1>
<form action="{{ route('pet.delete', [1]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Submit delete</button>
</form>

<h1> Delete Pet with input</h1>
    @if (isset($petId) && count($petId) > 0)
        <ul>
            @foreach ($petId as $pet)
                <li>(ID: {{ $pet['id'] ?? 'N/A' }})
                    <form action="{{ route('pet.delete', $pet['id']) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="{{ $pet['id'] }}" name="id">
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No pets available or an error occurred.</p>
    @endif

    @if ($errors->any())
        <div>
            <strong>Error:</strong> {{ $errors->first('error') }}
        </div>
    @endif

</div>

</div>
