@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add certificate</h2>

    <form method="post" action="/console/certificates/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">College Name:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="level">Level:</label>
            <input type="text" name="level" id="level" value="{{old('level')}}">

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

        <button project="submit" class="w3-button w3-green">Add certificate</button>

    </form>

    <a href="/console/certificates/list">Back to certificate List</a>

</section>

@endsection