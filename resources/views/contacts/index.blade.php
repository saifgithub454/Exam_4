<!DOCTYPE html>
<html>

<head>
    <title>Contact List</title>
</head>

<body>
    <h1>Contact List</h1>

    <form method="GET" action="{{ route('contacts.index') }}">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name or email">
        <button type="submit">Search</button>
    </form>

    <a href="{{ route('contacts.create') }}">Add New Contact</a>

    <table>
        <thead>
            <tr>
                <th><a href="{{ route('contacts.index', ['sort_by' => 'name']) }}">Name</a></th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>
                <td>
                    <a href="{{ route('contacts.show', $contact->id) }}">View</a>
                    <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                    <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contacts->appends(request()->query())->links() }}
</body>

</html>