@extends('layouts.create-or-edit-page')

@section('page-title')
    Create your new project
@endsection

@section('form-action')
    'admin.projects.store'
@endsection

@section('form-method')
    @method('POST')
@endsection
