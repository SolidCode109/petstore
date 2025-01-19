<div id="container--updatePet">
<h1> Update Pet </h1>
<form action="{{ route('pet.update') }}" method="post">
        @csrf
        @method('PUT')
        <label for="id">Pet ID:</label>
        <input type="number" id="id" name="id" required>

        <label for="category_id">Category ID:</label>
        <input type="number" id="category_id" name="category_id" required>

        <label for="category_name">Category Name:</label>
        <input type="text" id="category_name" name="category_name" required>

        <label for="name">Pet Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="photoUrls">Photo URLs:</label>
        <input type="text" id="photoUrls" name="photoUrls">

        <label for="tags">Tags:</label>
        <input type="text" id="tags" name="tags">

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="available">Available</option>
            <option value="pending">Pending</option>
            <option value="sold">Sold</option>
        </select>

        <button type="submit">Add Pet</button>
</form>
</div>