@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit academic</h2>

    <form method="post" action="/console/academics/edit/{{$academic->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="clgname">College Name:</label>
            <input type="clgname" name="clgname" id="clgname" value="{{old('clgname', $academic->clgname)}}" required>
            
            @if ($errors->first('clgname'))
                <br>
                <span class="w3-text-red">{{$errors->first('clgname')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="degree">Degree:</label>
            <input type="degree" name="degree" id="degree" value="{{old('degree', $academic->degree)}}">

            @if ($errors->first('degree'))
                <br>
                <span class="w3-text-red">{{$errors->first('degree')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="course">Course:</label>
            <input type="text" name="course" id="course" value="{{old('course', $academic->course)}}" required>

            @if ($errors->first('course'))
                <br>
                <span class="w3-text-red">{{$errors->first('course')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{old('description', $academic->description)}}</textarea>

            @if ($errors->first('description'))
                <br>
                <span class="w3-text-red">{{$errors->first('description')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="project_id">Project:</label>
            <select name="project_id" id="project_id">
                <option></option>
                @foreach($projects as $project)
                    <option value="{{$project->id}}"
                        {{$project->id == old('project_id', $academic->project_id) ? 'selected' : ''}}>
                        {{$project->title}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('project_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('project_id')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit academic</button>

    </form>

    <a href="/console/academics/list">Back to academic List</a>

</section>

@endsection
