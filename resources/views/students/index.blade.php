@extebds('students.layout')

@section('content')
<div class="pull-left">
    <h2>User</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route(students.create'}}">Create New User</a>
        </div>
    </div>
</div>

@if($message = session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>   
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>Name</th>
        <th>Email</td>
        <th width="280px">Action</th>
    </tr>

    @froeach ($students as $student)
    <tr>
        <td>{{++i}}</td>
        <td>{{ $student->studname }}</td>
        <td>{{ $student->email }}</td>
        <td>
            <form action="{{ route('students.destroy',$student->id) }}" method="post">
                <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>

    @endforeach
</table>