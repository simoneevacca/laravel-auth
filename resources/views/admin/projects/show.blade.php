@extends('layouts.admin')
@section('content')

<div class="container py-4">
    <a href="{{ route('projects.index') }}" class="btn btn-secondary"><strong>Back</strong></a>
    <div class="row row-cols-2">
        <div class="col d-flex justify-content-between">
            <div class="card">

                <h1>{{ $project->project_name }}</h1>
                <img src="{{ $project->preview_image }}" alt="">
                
        
            </div>
        </div>

        <div class="col content d-flex">
            <div class="card">
                <p>{{ $project->description }}</p>
                <p><a href="{{ $project->link_view }}">Link view</a></p>
                <p><a href="{{ $project->link_code }}">Link code</a></p>



            </div>
        </div>

    </div>

</div>

@endsection