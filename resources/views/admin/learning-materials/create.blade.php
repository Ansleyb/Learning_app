<!-- resources/views/admin/learning-materials/create.blade.php -->

@extends('layouts.admin') <!-- Ensure this layout exists in 'layouts/admin.blade.php' -->

@section('content')
    <h1>Create New Learning Material</h1>

    <form action="{{ route('admin.learning-materials.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Learning Material</button>
    </form>
@endsection
