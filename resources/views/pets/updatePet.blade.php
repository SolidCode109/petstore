<div id="container--updatePet">
    <h1> Update Pet </h1>
    <form action="{{ route('pet.update') }}" method="post">
        @csrf
        @method('PUT')
        <label for="id">Pet ID:</label>
        <input type="number" id="id" name="id" required>

        @error('id')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="category_id">Category ID:</label>
        <input type="number" id="category_id" name="category_id" required>

        @error('category_id')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="category_name">Category Name:</label>
        <input type="text" id="category_name" name="category_name" required>

        @error('category_name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="name">Pet Name:</label>
        <input type="text" id="name" name="name" required>

        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="photoUrls">Photo URLs:</label>
        <input type="text" id="photoUrls" name="photoUrls">

        @error('photoUrls')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="tags">Tags:</label>
        <input type="text" id="tags" name="tags">

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="available">Available</option>
            <option value="pending">Pending</option>
            <option value="sold">Sold</option>
        </select>

        @error('status')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">Add Pet</button>
    </form>

    @if (session('success'))
        <div style="color: green;">
            <strong>Success:</strong> {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div style="color: red;">
            <strong>Error:</strong> {{ session('error') }}
        </div>
    @endif


</div>
