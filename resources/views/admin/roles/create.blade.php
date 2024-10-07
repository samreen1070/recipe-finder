@extends('admin.layout.index')



@section('content')
    <br>
    <br>

    <div class="container w-50">
        <h1 class="text-center fw-bold" style="color: black;">Roles Creation</h1>

        <form method="POST" action="{{ route('roles.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label fw-bold" style="color: black;">Role name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="permission_id" class="fw-bold" style="color: black;">Permission :</label>
                <select name="permission_id[]" multiple class="js-example-basic-multiple form-control" id="permission_id">
                    @foreach(Spatie\Permission\Models\Permission::all() as $permission)
                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="fw-bold" style="color: black;">Submit</button>
        </form>
    </div>

    <br>
    <br>
    <br>
@endsection


