
@extends('home')

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <form action="{{url('/user/delete/' . $user->id)}}" method="POST">
         @csrf
        @method('DELETE')
      </div>
      <div class="modal-body">
        Delete Member?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete Member</button>
      </div>
        </form>
       
    </div>
  </div>
</div>

    <h1>Edit Member</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('/user/' . $user->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group mt-2">
                    <label for="full_name">Full_name</label>
                    <input class="form-control" type="text" name="full_name" value="{{$user->full_name}}">
                    @error('full_name')
                        <p class="text-danger">{{$info}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" value="{{$user->username}}">
                    @error('username')
                    <p class="text-danger">{{$info}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" value="{{$user->email}}">
                    @error('email')
                    <p class="text-danger">{{$info}}</p>
                    @enderror
                  </div>
                  
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        Change</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Delete
                    </button>
                  </div>
            </form>
        </div>
    </div>

    


@endsection