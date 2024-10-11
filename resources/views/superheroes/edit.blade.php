<!DOCTYPE html>
<html>
<head>
    <title>Edit Superhero</title>
</head>
<body>
    <h1>Edit Superhero</h1>
    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="real_name">Real Name:</label>
        <input type="text" name="real_name" id="real_name" value="{{ $superhero->real_name }}" required><br>
        
        <label for="hero_name">Hero Name:</label>
        <input type="text" name="hero_name" id="hero_name" value="{{ $superhero->hero_name }}" required><br>
        
        <label for="photo_url">Photo URL:</label>
        <input type="text" name="photo_url" id="photo_url" value="{{ $superhero->photo_url }}" required><br>
        
        <label for="additional_info">Additional Information:</label>
        <textarea name="additional_info" id="additional_info">{{ $superhero->additional_info }}</textarea><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
