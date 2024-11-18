@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-light">@yield('page-title')</h1>

        <div class="row">
            <div class="col-8">
                <form action="@yield('form-action')" method="POST" class="text-light">
                    @yield('form-method')
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="title" class="form-control" id="title" name="title"
                            value="{{ old('title'), $project->title }}">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="type" class="form-label">Type</label>
                        <select name="type_id" id="type" class="form-control">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('type')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="project-techs" class="form-label">Technologies</label>
                        @foreach ($technologies as $technology)
                            <div class="form-check">
                                <input type="checkbox" name="technologies[]" id="project-techs" class="form-check-input"
                                    value="{{ $technology->id }}">
                                <label type="checkbox" name="technologies[]" id="project-techs" class="form-check-label">
                                    {{ $technology->name }}
                                </label>
                            </div>
                        @endforeach

                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" name="description"
                            value="{{ old('description'), $project->description }}"></textarea>
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image_url" class="form-label">Image URL</label>
                        <input type="url" class="form-control" id="image_url" name="image_url"
                            value="{{ old('image_url'), $project->image_url }}">
                        @error('image_url')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="git_url" class="form-label">GitHub URL</label>
                        <input type="url" class="form-control" id="git_url" name="git_url"
                            value="{{ old('git_url'), $project->git_url }}">
                        @error('git_url')
                            {{ $message }}
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
