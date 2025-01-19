<div id="container--deletePet">
<h1> Delete Pet id=1 </h1>
<form action="{{ route('pet.delete', [1]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Submit delete</button>
</form>
</div>