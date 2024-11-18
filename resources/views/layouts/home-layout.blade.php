@extends('layouts.app')

@section('content')
    <div class="container text-light">
        <h1 class="text-center my-3">My portfolio</h1>

        <a href="{{ route('admin.projects.create') }}" class="btn btn-light mb-4 fs-4">Create a new post</a>

        <div class="row row-cols-3 g-3">
            @forelse ($projects as $index => $project)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $project->image_url }}" class="card-img-top h-75 object-fit-contain" alt="...">
                        <div class="card-body">
                            <h4>{{ $project->title }}</h4>
                            <div class="mb-2">
                                @forelse ($project->technologies as $technology)
                                    <span class="badge text-bg-dark fs-6">{{ $technology->name }}</span>
                                @empty
                                @endforelse
                            </div>
                            <h5>{{ $project->type->name }}</h5>
                            <p class="card-text">{{ $project->description }}</p>

                            <div class="d-flex">
                                <a href="{{ route('guest.projects.show', $project->id) }}"
                                    class="btn btn-success me-1">Show</a>
                                <a href="{{ route('admin.projects.edit', $project->id) }}"
                                    class="btn btn-warning me-1">Edit</a>
                                <form action="{{ route('admin.projects.delete', $project->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger me-1">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>Non ci sono progetti da visualizzare</p>
            @endforelse
        </div>
    </div>
@endsection
