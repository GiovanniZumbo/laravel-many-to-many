@extends('layouts.create-or-edit-page')

@section('page-title')
    Create your new project
@endsection

@section('form-action')
    {{ route('admin.projects.create', $project) }}
@endsection

@section('form-method')
    @method('POST')
@endsection
