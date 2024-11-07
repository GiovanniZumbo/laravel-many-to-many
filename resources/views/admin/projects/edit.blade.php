@extends('layouts.create-or-edit-page')
@section('page-title')
    Edit your project
@endsection

@section('form-action')
    'admin.projects.update'
@endsection

@section('form-method')
    @method('PUT')
@endsection
