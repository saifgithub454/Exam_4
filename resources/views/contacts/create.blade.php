<!DOCTYPE html>
<html>

<head>
    <title>Create Contact</title>
</head>

<body>
    <h1>Create New Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone">
        <br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address">
        <br>

        <button type="submit">Create Contact</button>
    </form>
</body>

</html>