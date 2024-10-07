@extends('admin.layout.index')

@section('content')
    <div class="container">
        <h1 class="text-dark">Users</h1>

        <table style="width:100%; border-collapse: collapse; background-color:rgb(74, 44, 131)">
            <thead>
                <tr>
                    <th class="fw-bold" style="border: 1px solid black; padding: 8px; color:rgb(252, 245, 245)">ID</th>
                    <th style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">Name</th>
                    <th style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">Email</th>
                    <th style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">Role</th>
                    <th style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td style="border: 1px solid black; padding: 8px; color:rgb(252, 245, 245)">{{ $user->id }}</td>
                        <td style="border: 1px solid black; padding: 8px; color:rgb(252, 245, 245)">{{ $user->name }}</td>
                        <td style="border: 1px solid black; padding: 8px; color:rgb(252, 245, 245)">{{ $user->email }}</td>
                        {{-- <td style="border: 1px solid black; padding: 8px; color:rgb(252, 245, 245)">{{ $user->password }}</td> --}}
                        <td style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">
                            @foreach ($user->roles as $role)
                                {{$role->name}}
                            @endforeach
                        </td>
                        <td style="border: 1px solid black; padding: 8px; color:rgb(252, 245, 245)">
                            <button class="bg-transparent text-decoration-none">
                                <a class="text-decoration-none fw-bold" href="{{ route('users.delete', $user->id) }}" style="color:rgb(252, 245, 245);">
                                    Delete
                                </a>
                            </button>
                            <button class="bg-transparent text-decoration-none">
                                <a class="text-decoration-none fw-bold" href="{{ route('users.edit', $user->id) }}" style="color:rgb(252, 245, 245);">
                                    Update
                                </a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br>
        <br>
        <br>
    </div>
@endsection
