@extends('admin.layout.index')

@section('content')
    <div class="container">
        <h1 class="text-dark">Roles</h1>

        <table style="width:100%; border-collapse: collapse;background-color:rgb(74, 44, 131)">
            <thead>
                <tr>
                    <th class="fw-bold" style="border: 1px solid black; padding: 8px; color:rgb(252, 245, 245)">ID</th>
                    <th style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">Role Name</th>
                    <th style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">Assigned Permission</th>
                    <th style="border: 1px solid black; padding: 4px;color:rgb(252, 245, 245)">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">{{ $role->id }}</td>
                        <td style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">{{ $role->name }}</td>
                        <td style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">
                            @foreach ($role->permissions as $permission)
                                {{$permission->name}}
                            @endforeach
                        </td>
                        <td style="border: 1px solid black; padding: 8px;color:rgb(252, 245, 245)">
                            <button class="bg-transparent text-decoration-none"> <a class="text-decoration-none fw-bold"
                                    href="{{route('role.delete',$role->id)}}"
                                    style="color:rgb(252, 245, 245);">Delete</a></button>
                            <button class="bg-transparent text-decoration-none"> <a class="text-decoration-none fw-bold"
                                    href="{{route('role.edit',$role->id)}}" style="color:rgb(252, 245, 245) ;">Update</a></button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <br>
        <br> <br>
    @endsection
