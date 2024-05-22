@extends('layouts.admin')

@section('content')
    <div class="container projects-index">
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary my-4">Add new project</a>
        <div class="table-responsive ">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Preview Image</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr class="">
                            <td scope="row">{{ $project->id }}</td>
                            <td><img src="{{ asset('storage/' . $project->preview_image )}}" alt=""></td>
                            <td>{{ $project->project_name }}</td>
                            <td>
                                <a href="{{ route('admin.projects.show', $project) }}">view</a>
                                <a href="{{ route('admin.projects.edit', $project) }}">edit</a>


                                <!-- Modal trigger button -->
                                <a href="#"
                                    data-bs-toggle="modal"data-bs-target="#modalId-{{ $project->id }}">delete</a>


                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $project->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId-{{ $project->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" id="modalTitleId-{{ $project->id }}">
                                                    Delete Project
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-dark">Attention! You are deleting this character, this action
                                                irreversible. Do you want to continue?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    back
                                                </button>
                                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
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

        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endsection
