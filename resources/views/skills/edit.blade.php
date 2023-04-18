@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit skill</h2>

    <form method="post" action="/console/skills/edit/{{$skill->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">skills Name:</label>
            <input type="name" name="name" id="name" value="{{old('name', $skill->name)}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="prof">Proficiency:</label>
            <input type="prof" name="prof" id="prof" value="{{old('prof', $skill->prof)}}">

            @if ($errors->first('prof'))
                <br>
                <span class="w3-text-red">{{$errors->first('prof')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="learned_at">Learned at:</label>
            <input type="text" name="learned_at" id="learned_at" value="{{old('learned_at', $skill->learned_at)}}" required>

            @if ($errors->first('learned_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('learned_at')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit skill</button>

    </form>

    <a href="/console/skills/list">Back to skill List</a>

</section>

@endsection
