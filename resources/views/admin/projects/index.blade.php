@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="table-responsive">
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
                            <a href="">view</a>
                            <a href="">edit</a>
                            <a href="">delete</a>
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
