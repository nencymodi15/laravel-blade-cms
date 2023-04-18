@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Educations</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
          
            <th>Degree</th>
            <th>College Name</th>
            <th>Course</th>
            <th>description</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($academics as $academic)
            <tr>
                
                <td>{{$academic->degree}}</td>
                <td>{{$academic->clgname}}</td>
                <td>{{$academic->course}}</td>
                <td>{{$academic->description}}</td>
                <td>{{$academic->created_at->format('M j, Y')}}</td>
                <td><a href="/console/academics/edit/{{$academic->id}}">Edit</a></td>
                <td><a href="/console/academics/delete/{{$academic->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/academics/add" class="w3-button w3-green">New Education</a>

</section>

@endsection
