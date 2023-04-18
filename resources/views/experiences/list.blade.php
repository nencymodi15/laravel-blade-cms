@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage experience</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">

            <th>Company Image</th>
            <th>Company name</th>
            <th>Years of Experience</th>
            <th>Position</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($experiences as $experience)
            <tr>
                <td>
                    @if ($experience->image)
                        <img src="{{asset('storage/'.$experience->image)}}" width="200">
                    @endif
                </td>
                <td>{{$experience->CompanyName}}</td>
                <td>{{$experience->yearsofexperiance}}</td>
                <td>{{$experience->position}}</td>
                <td>{{$experience->created_at->format('M j, Y')}}</td>
                <td><a href="/console/experiences/image/{{$experience->id}}">Image</a></td>
                <td><a href="/console/experiences/edit/{{$experience->id}}">Edit</a></td>
                <td><a href="/console/experiences/delete/{{$experience->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/experiences/add" class="w3-button w3-green">New experience</a>

</section>

@endsection
