@extends('admin.layout.index')

@section('content')
    <br>
    <br>

    <div class="container w-50">
        <h1 class="text-center fw-bold" style="color: black;">User Creation</h1>
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-bold " style="color: black;">User Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold " style="color: black;">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-bold " style="color: black;">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="role_id" class="fw-bold" style="color: black;">Role:</label>
                <select name="role_id[]" id="role_id" class="form-control" >
                    @foreach(Spatie\Permission\Models\Role::all() as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary fw-bold" style="color: white;">Submit</button>
        </form>
    </div>
    <br>
    <br>
    <br>
@endsection
