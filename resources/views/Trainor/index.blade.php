@extends('home')

@section('content')

@if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    
    <div class="table">
        <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Advisor ID</th>
                <th>Full Name</th>
                <th>Specialty</th>
            </tr>
            <div class="d-grip gap-2 d-md-flex justify-content-md-end mb-2">

                <a href="{{url('/trainor/create')}}" class="btn btn-primary me-nd-2" type="button">
                Add New Advisor
                </div>
        </thead>
        <tbody>
            <?php foreach($trainor as $trains): ?>

                <tr>
                    <td>{{$trains->id}}</td>
                    <td>{{$trains->user->full_name}}</td>
                    <td>{{$trains->specialty}}</td>
                </tr>

                <?php endforeach; ?>
        </tbody>
    </div>
    @endsection
</body>
</html>