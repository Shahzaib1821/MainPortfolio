@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add New Project</h4>

                    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="title">Title: </label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" name="title" value="{{ old('title') }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="project_link">Project Link: </label>
                                    <input type="url" class="form-control @error('project_link') is-invalid @enderror"
                                        id="project_link" name="project_link" value="{{ old('project_link') }}">
                                    @error('project_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="stacks">Stacks/Technologies: </label>
                                    <input type="text"
                                        class="form-control @error('stacks') is-invalid @enderror"
                                        id="stacks" name="stacks"
                                        value="{{ old('stacks') }}">
                                    @error('stacks')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="company">Company: </label>
                                    <input type="text" class="form-control @error('company') is-invalid @enderror"
                                        id="company" name="company" value="{{ old('company') }}">
                                    @error('company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="image_path">Image: </label>
                                    <input type="file" class="form-control @error('image_path') is-invalid @enderror"
                                        id="image_path" name="image_path">
                                    @error('image_path')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="background_color">Background Color: </label>
                                    <input type="file" class="form-control @error('background_color') is-invalid @enderror"
                                        id="background_color" name="background_color">
                                    @error('background_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="description">Description: </label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                        rows="4">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-12">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create</button>
                                    <a href="{{ route('projects.index') }}" class="btn btn-secondary w-md">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
