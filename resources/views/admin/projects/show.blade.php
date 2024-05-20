@extends('layouts.admin')
@section('content')

<div class="container py-4">
    <a href="{{ route('projects.index') }}" class="btn btn-secondary"><strong>Back</strong></a>
    <div class="d-flex justify-content-between">
        <h1>{{ $project->project_name }}</h1>
        <div>Used Languages: {{ $project->language }}</div>

    </div>
    <div class="content d-flex">
        <img src="{{ $project->preview_image }}" alt="">
        <p>{{ $project->description }}</p>
    </div>

</div>

@endsection