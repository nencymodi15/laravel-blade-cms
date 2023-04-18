@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Experience</h2>

    <form method="post" action="/console/experiences/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="CompanyName">Company Name:</label>
            <input type="text" name="CompanyName" id="CompanyName" value="{{old('CompanyName')}}" required>
            
            @if ($errors->first('CompanyName'))
                <br>
                <span class="w3-text-red">{{$errors->first('CompanyName')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="yearsofexperiance">Years of experiances:</label>
            <input type="text" name="yearsofexperiance" id="yearsofexperiance" value="{{old('yearsofexperiance')}}">

            @if ($errors->first('yearsofexperiance'))
                <br>
                <span class="w3-text-red">{{$errors->first('yearsofexperiance')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="position">Position:</label>
            <input type="text" name="position" id="position" value="{{old('position')}}" required>

            @if ($errors->first('position'))
                <br>
                <span class="w3-text-red">{{$errors->first('position')}}</span>
            @endif
        </div>
        
        <div class="w3-margin-bottom">
            <label for="project_id">Project:</label>
            <select name="project_id" id="project_id">
                <option></option>
                @foreach ($projects as $project)
                    <option value="{{$project->id}}"
                        {{$project->id == old('project_id') ? 'selected' : ''}}>
                        {{$project->title}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('project_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('project_id')}}</span>
            @endif
        </div>

        <button project="submit" class="w3-button w3-green">Add Experiances</button>

    </form>

    <a href="/console/academics/list">Back to experiance List</a>

</section>

@endsection