@extends('admin.layout.index')

@section('content')
    <div class="container w-50">
        <h1 class="text-center fw-bold" style="color: black;">Update User</h1>
        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf


            <div class="mb-3">
                <label for="name" class="form-label fw-bold" style="color: black;">User Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold" style="color: black;">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
            </div>


            {{-- <div class="mb-3">
                <label for="password" class="form-label fw-bold" style="color: black;">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="">
            </div> --}}

            <button type="submit" class="btn btn-primary fw-bold" style="color: white;">Update</button>
        </form>
    </div>
@endsection
