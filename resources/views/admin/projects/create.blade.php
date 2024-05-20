@extends('layouts.admin')
@section('content')
    <div class="container py-4">
        <a href="{{ route('projects.index') }}" class="btn btn-secondary"><strong>Back</strong></a>

        <h1>
            Add Project
        </h1>

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="project_name" class="form-label">Project Name</label>
                <input type="text" name="project_name" id="project_name" class="form-control" placeholder=""
                    aria-describedby="project_nameId" />
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6"></textarea>
            </div>

            <div class="mb-3">
                <label for="preview_image" class="form-label">Image</label>
                <input type="text" name="preview_image" id="preview_image" class="form-control" placeholder=""
                    aria-describedby="preview_imageId" />
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">Languages</label>
                <input type="text" name="language" id="language" class="form-control" placeholder=""
                    aria-describedby="languageId" />
            </div>

            <button type="submit" class="btn btn-primary">
                Add
            </button>


        </form>




    </div>
@endsection
