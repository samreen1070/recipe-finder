@extends('admin.layout.index')

@section('content')
    <br>
    <br>
    <div class="container w-50">
        <h1 class="text-center fw-bold" style="color: black;">Roles Updatiom</h1>
        <form method="POST" action="{{ route('role.update',$role->id)}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-bold " style="color: black;">Role name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$role->name}}">

            </div>


            <button type="submit" class=" fw-bold" style="color: black;">Save</button>
        </form>
    </div>
    <br>
    <br>
    <br>

@endsection
