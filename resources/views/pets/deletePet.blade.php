<h1> Delete Pet </h1>
<form action="{{ route('pet.delete') }}" method="post">
        @csrf
        @method('DELETE')
        <label for="id">Pet ID:</label>
        <input type="number" id="id" name="id" required>

        <button type="submit">Delete Pet</button>
</form>