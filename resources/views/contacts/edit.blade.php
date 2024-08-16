<!DOCTYPE html>
<html>

<head>
    <title>Edit Contact</title>
</head>

<body>
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $contact->name) }}" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
        <br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}">
        <br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ old('address', $contact->address) }}">
        <br>

        <button type="submit">Update Contact</button>
    </form>

    <a href="{{ route('contacts.index') }}">Back to Contacts List</a>
</body>

</html>