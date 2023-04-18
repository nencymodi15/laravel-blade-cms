@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit certificate</h2>

    <form method="post" action="/console/certificates/edit/{{$certificate->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Certificate Name:</label>
            <input type="name" name="name" id="name" value="{{old('name', $certificate->name)}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="level">level:</label>
            <input type="level" name="level" id="level" value="{{old('level', $certificate->level)}}">

            @if ($errors->first('level'))
                <br>
                <span class="w3-text-red">{{$errors->first('level')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="skill_id">skill:</label>
            <select name="skill_id" id="skill_id">
                <option></option>
                @foreach($skills as $skill)
                    <option value="{{$skill->id}}"
                        {{$skill->id == old('skill_id', $certificate->skill_id) ? 'selected' : ''}}>
                        {{$skill->name}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('skill_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('skill_id')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit certificate</button>

    </form>

    <a href="/console/certificates/list">Back to certificate List</a>

</section>

@endsection
