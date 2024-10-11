<!DOCTYPE html>
<html>
<head>
    <title>Superhero Details</title>
</head>
<body>
    <h1>{{ $superhero->hero_name }} ({{ $superhero->real_name }})</h1>
    <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->hero_name }}">
    <p>{{ $superhero->additional_info }}</p>
    
    <a href="{{ route('superheroes.edit', $superhero->id) }}">Edit</a>
    <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('superheroes.index') }}">Back to List</a>
</body>
</html>
