@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Projects</h4>
                            <a href="{{ route('projects.create') }}"
                                class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                                <i class="bx bx-plus"></i> Add New Project
                            </a>
                        </div>
                        <hr>

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Project Link</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->description }}</td>
                                        <td><img src="{{ asset($project->image_path) }}" class="img-thumbnail" width="100px" /></td>
                                        <td><a href="{{ $project->project_link }}" target="_blank">{{ $project->project_link }}</a></td>
                                        <td>
                                            <form action="{{ route('projects.destroy',$project->id) }}" method="POST"
                                                style="display: inline;">
                                                <a href="{{ route('projects.edit',$project->id) }}"
                                                    class="btn btn-soft-info waves-effect waves-light">
                                                    <i class="bx bx-pencil"></i> Edit
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-soft-danger waves-effect waves-light">
                                                    <i class="bx bx-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {!! $projects->links() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
