@extends('layouts.app')

@section('content')
    <div class="container text-light">
        <h1 class="text-center my-3">{{ $project->title }}</h1>

        <div class="row">
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
                        <p class="card-text">{{ $project->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
