<!DOCTYPE html>
<html>

<head>
    <title>Show Contact</title>
</head>

<body>
    <h1>Contact Details</h1>

    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Address:</strong> {{ $contact->address }}</p>

    <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('contacts.index') }}">Back to Contacts List</a>
</body>

</html>