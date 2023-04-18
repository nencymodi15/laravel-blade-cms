@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Certificates</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Certificate Image</th>
            <th>Name Of the Certificate</th>
            <th>Level</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($certificates as $certificate)
            <tr>
                <td>
                    @if ($certificate->image)
                        <img src="{{asset('storage/'.$certificate->image)}}" width="200">
                    @endif
                </td>
                <td>{{$certificate->name}}</td>
                <td>{{$certificate->level}}</td>
                <td>{{$certificate->created_at->format('M j, Y')}}</td>
                <td><a href="/console/certificates/edit/{{$certificate->id}}">Edit</a></td>
                <td><a href="/console/certificates/delete/{{$certificate->id}}">Delete</a></td>
                <td><a href="/console/certificates/image/{{$certificate->id}}">Image</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/certificates/add" class="w3-button w3-green">New Certificate</a>

</section>

@endsection
