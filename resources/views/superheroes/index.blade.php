<!DOCTYPE html>
<html>
<head>
    <title>Superheroes List</title>
</head>
<body>
    <h1>All Superheroes</h1>
    <a href="{{ route('superheroes.create') }}">Add New Superhero</a>
    <ul>
        @foreach ($superheroes as $superhero)
            <li>
                <a href="{{ route('superheroes.show', $superhero->id) }}">{{ $superhero->hero_name }}</a>
                <a href="{{ route('superheroes.edit', $superhero->id) }}">Edit</a>
                <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
