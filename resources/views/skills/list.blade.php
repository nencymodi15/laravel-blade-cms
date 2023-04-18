@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage skill</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">

            <th>Skill Image</th>
            <th>Skill Name</th>
            <th>Proficiency</th>
            <th>learned_at</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($skills as $skill)
            <tr>

                <td>
                    @if ($skill->image)
                        <img src="{{asset('storage/'.$skill->image)}}" width="200">
                    @endif
                </td>
                
                <td>{{$skill->name}}</td>
                <td>{{$skill->prof}}</td>
                <td>{{$skill->learned_at}}</td>
                <td>{{$skill->created_at->format('M j, Y')}}</td>
                <td><a href="/console/skills/image/{{$skill->id}}">Image</a></td>
                <td><a href="/console/skills/edit/{{$skill->id}}">Edit</a></td>
                <td><a href="/console/skills/delete/{{$skill->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/skills/add" class="w3-button w3-green">New Skills</a>

</section>

@endsection
