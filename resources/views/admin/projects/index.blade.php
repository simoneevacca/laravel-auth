@extends('layouts.admin')

@section('content')

    <div class="container">
        <a href="{{ route('projects.create') }}" class="btn btn-primary my-4">Add new project</a>
        <div class="table-responsive my-4">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Preview Image</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Languages</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                    <tr class="">
                        <td scope="row"><img src="{{ $project->preview_image }}" alt=""></td>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->language }}</td>
                        <td>
                            <a href="{{ route('projects.show', $project) }}">view</a>
                            {{-- <a href="{{ route('projects.edit') }}">edit</a> --}}
                            {{-- <a href="{{ route('projects.destroy') }}">delete</a> --}}
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
