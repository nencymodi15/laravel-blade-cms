@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <ul id="dashboard">
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/topics/list">Manage Topics</a></li>
        <li><a href="/console/entries/list">Manage Entries</a></li>
        <li><a href="/console/skills/list">Manage skills</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/experiences/list">Manage Experiences</a></li>
        <li><a href="/console/certificates/list">Manage Certificates</a></li>
        <li><a href="/console/academics/list">Manage Academics</a></li>
        <li><a href="/console/logout">Log Out</a></li>
    </ul>

</section>

@endsection
