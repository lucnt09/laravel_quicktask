@extends('layouts.app')

@section('title', 'User List')

@section('content')
    <div class="container">
        <h1>List of Users</h1>
        <table class="table table-striped mt-3">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ms-3" onclick="return confirm('Are You Want To Delete ?')">Delete</button>
                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
