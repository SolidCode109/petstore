<div id="container--addPet">
    <h1> Add a Pet </h1>
    <form action="{{ route('pet.add') }}" method="post">
        @csrf

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

        @error('name')
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

        @error('tags')
            <div style="color: red;">{{ $message }}</div>
        @enderror

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
</div>
