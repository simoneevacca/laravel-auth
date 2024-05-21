@extends('layouts.admin')
@section('content')
    <div class="container">
        <a href="{{ route('projects.index') }}" class="btn btn-secondary"><strong>Back</strong></a>

        <h1 class=" text-white">
            Add Project
        </h1>

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="project_name" class="form-label text-white ">Project Name</label>
                <input type="text" name="project_name" id="project_name" class="form-control" placeholder=""
                    aria-describedby="project_nameId" />
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-white">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6"></textarea>
            </div>

            <div class="mb-3">
                <label for="preview_image" class="form-label text-white">Image</label>
                <input type="text" name="preview_image" id="preview_image" class="form-control" placeholder=""
                    aria-describedby="preview_imageId" />
            </div>
            
            <div class="mb-3">
                <label for="link_view" class="form-label text-white">Link view</label>
                <input type="text" name="link_view" id="link_view" class="form-control" placeholder=""
                    aria-describedby="link_viewId" />
            </div>

            <div class="mb-3">
                <label for="link_code" class="form-label text-white">Link code</label>
                <input type="text" name="link_code" id="link_code" class="form-control" placeholder=""
                    aria-describedby="link_codeId" />
            </div>

            <button type="submit" class="btn btn-primary">
                Add
            </button>


        </form>




    </div>
@endsection
