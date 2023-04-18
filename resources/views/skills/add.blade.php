@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Skills</h2>

    <form method="post" action="/console/skills/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Skills Name:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="prof">Proficiency:</label>
            <input type="text" name="prof" id="prof" value="{{old('prof')}}">

            @if ($errors->first('prof'))
                <br>
                <span class="w3-text-red">{{$errors->first('prof')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="learned_at">Learned at:</label>
            <input type="text" name="learned_at" id="learned_at" value="{{old('learned_at')}}" required>

            @if ($errors->first('learned_at'))
                <br>
                <span class="w3-text-red">{{$errors->first('learned_at')}}</span>
            @endif
        </div>

        <button project="submit" class="w3-button w3-green">Add Skills</button>

    </form>

    <a href="/console/skills/list">Back to skills List</a>

</section>

@endsection