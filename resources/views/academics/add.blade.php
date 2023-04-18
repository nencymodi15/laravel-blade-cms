@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add academic</h2>

    <form method="post" action="/console/academics/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="clgname">College Name:</label>
            <input type="text" name="clgname" id="clgname" value="{{old('clgname')}}" required>
            
            @if ($errors->first('clgname'))
                <br>
                <span class="w3-text-red">{{$errors->first('clgname')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="degree">Degree:</label>
            <input type="text" name="degree" id="degree" value="{{old('degree')}}">

            @if ($errors->first('degree'))
                <br>
                <span class="w3-text-red">{{$errors->first('degree')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="course">Course:</label>
            <input type="text" name="course" id="course" value="{{old('course')}}" required>

            @if ($errors->first('course'))
                <br>
                <span class="w3-text-red">{{$errors->first('course')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">description:</label>
            <textarea name="description" id="description" required>{{old('description')}}</textarea>

            @if ($errors->first('description'))
                <br>
                <span class="w3-text-red">{{$errors->first('description')}}</span>
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

        <button project="submit" class="w3-button w3-green">Add academic</button>

    </form>

    <a href="/console/academics/list">Back to academic List</a>

</section>

@endsection