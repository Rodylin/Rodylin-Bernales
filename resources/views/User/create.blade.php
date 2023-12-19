@extends('home')

@section('content')
<body>


            <form action="{{url('user/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="full_name">Full Name</label>
                    <input placeholder="" type="text" name="full_name" class="form-control">
                </div>
                @error('full_name')
                        <p class="text-danger">{{$message}}</p>
                @enderror

                <div class="form-group mt-2">
                    <label for="username">User Name</label>
                    <input placeholder="" type="text" name="username" class="form-control">
                </div>
                @error('username')
                        <p class="text-danger">{{$message}}</p>
                @enderror

                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input placeholder="" type="text" name="email" class="form-control">
                </div>
                @error('email')
                        <p class="text-danger">{{$message}}</p>
                @enderror
                
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                     <button class="btn btn-primary">
                        Add Member
                    </button>
                </div>
            </form>



    
    @endsection
</body>