<!DOCTYPE html>
<html>
<head>
    <title>Add Superhero</title>
</head>
<body>
    <h1>Add a New Superhero</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <label for="real_name">Real Name:</label>
        <input type="text" name="real_name" id="real_name" required><br>
        
        <label for="hero_name">Hero Name:</label>
        <input type="text" name="hero_name" id="hero_name" required><br>
        
        <label for="photo_url">Photo URL:</label>
        <input type="text" name="photo_url" id="photo_url" required><br>
        
        <label for="additional_info">Additional Information:</label>
        <textarea name="additional_info" id="additional_info"></textarea><br>
        
        <button type="submit">Save</button>
    </form>
</body>
</html>
