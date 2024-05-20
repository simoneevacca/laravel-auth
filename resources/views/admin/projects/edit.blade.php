@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('projects.index') }}" class="btn btn-secondary"><strong>Back</strong></a>
        <h1 class=" text-white">Editing {{ $project->project_name }}</h1>
        
        <form action="{{ route('projects.update', $project) }}" method="POST">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="project_name" class="form-label text-white">Project Name</label>
                <input type="text" name="project_name" id="project_name" class="form-control" placeholder=""
                    aria-describedby="project_nameId" value="{{ $project->project_name }}"/>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-white">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6">{{ $project->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="preview_image" class="form-label text-white">Image</label>
                <input type="text" name="preview_image" id="preview_image" class="form-control" placeholder=""
                    aria-describedby="preview_imageId" value="{{ $project->preview_image }}"/>
            </div>
            <div class="mb-3">
                <label for="language" class="form-label text-white">Languages</label>
                <input type="text" name="language" id="language" class="form-control" placeholder=""
                    aria-describedby="languageId" value="{{ $project->language}}"/>
            </div>

            <button type="submit" class="btn btn-primary">
                Save
            </button>


        </form>
        
    </div>
@endsection
