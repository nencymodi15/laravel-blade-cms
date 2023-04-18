@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Experience</h2>

    <form method="post" action="/console/experiences/edit/{{$experience->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="CompanyName">Company Name:</label>
            <input type="CompanyName" name="CompanyName" id="CompanyName" value="{{old('CompanyName', $experience->CompanyName)}}" required>
            
            @if ($errors->first('CompanyName'))
                <br>
                <span class="w3-text-red">{{$errors->first('CompanyName')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="yearsofexperiance">Years of Experiances:</label>
            <input type="yearsofexperiance" name="yearsofexperiance" id="yearsofexperiance" value="{{old('yearsofexperiance', $experience->yearsofexperiance)}}">

            @if ($errors->first('yearsofexperiance'))
                <br>
                <span class="w3-text-red">{{$errors->first('yearsofexperiance')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="position">Position:</label>
            <input type="text" name="position" id="position" value="{{old('position', $experience->position)}}" required>

            @if ($errors->first('position'))
                <br>
                <span class="w3-text-red">{{$errors->first('position')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="project_id">project:</label>
            <select name="project_id" id="project_id">
                <option></option>
                @foreach($projects as $project)
                    <option value="{{$project->id}}"
                        {{$project->id == old('project_id', $experience->project_id) ? 'selected' : ''}}>
                        {{$project->title}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('project_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('project_id')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit experience</button>

    </form>

    <a href="/console/experiences/list">Back to experience List</a>

</section>

@endsection
