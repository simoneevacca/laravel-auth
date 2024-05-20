@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('projects.create') }}" class="btn btn-primary my-4">Add new project</a>
        <div class="table-responsive my-4">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Preview Image</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Languages</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr class="">
                            <td scope="row">{{ $project->id }}</td>
                            <td ><img src="{{ $project->preview_image }}" alt=""></td>
                            <td>{{ $project->project_name }}</td>
                            <td>{{ $project->language }}</td>
                            <td>
                                <a href="{{ route('projects.show', $project) }}">view</a>
                                <a href="{{ route('projects.edit', $project) }}">edit</a>


                                <!-- Modal trigger button -->
                                <a href="#" data-bs-toggle="modal"data-bs-target="#modalId-{{ $project->id }}">delete</a>


                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $project->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId-{{ $project->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId-{{ $project->id }}">
                                                    Delete Project
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Attention! You are deleting this character, this action
                                                irreversible. Do you want to continue?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    back
                                                </button>
                                                <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Optional: Place to the bottom of scripts -->
                                <script>
                                    const myModal = new bootstrap.Modal(
                                        document.getElementById("modalId"),
                                        options,
                                    );
                                </script>

                            </td>

                        </tr>

                    @empty
                        <tr class="">
                            <td scope="row">no record</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection
