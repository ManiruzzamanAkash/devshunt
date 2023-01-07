@extends('backend.layouts.master')

@section('title')
    New Lecture for - {{ $course->title }}
@endsection

@section('page-right-side')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.lessons.index', $course->id) }}">Lectures</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create New lecture</li>
        </ol>
    </nav>
@endsection

@section('admin-content')
@section('admin-content')
    <form action="{{ route('admin.lessons.store', $course->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="chapter_id" class="form-label">
                            Chapter <span class="text-danger">*</span>
                        </label>
                        <select name="chapter_id" id="chapter_id" class="form-control">
                            <option value="">--Select--</option>
                            @foreach ($chapters as $chapter)
                                <option value="{{ $chapter->id }}"{{ old('chapter_id') == $chapter->id ? 'selected' : '' }} >
                                    {{ $chapter->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="status" class="form-label">
                            Status <span class="text-danger">*</span>
                        </label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="label" class="form-label">
                            Label <span class="text-danger">*</span>
                        </label>
                        <select name="label" id="label" class="form-control">
                            @foreach ($labels as $label => $labelString)
                                <option value="{{ $label }}" {{ old('label') === $label ? 'selected' : '' }}>
                                    {{ $labelString }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="priority" class="form-label">
                            Priority <span class="text-info">(optional)</span>
                        </label>
                        <input type="number" name="priority" id="priority" class="form-control" value="{{ empty(old('priority')) ? '10' : old('priority') }}">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label for="value" class="form-label">
                            Value <span class="text-info">(optional)</span>
                        </label>
                        <input type="number" name="value" id="value" class="form-control" value="{{ empty(old('value')) ? '1' : old('value') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="is_free" class="form-label">
                            Is free ?
                            <span class="text-info">(optional)</span>
                        </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="is_free" id="is_free" value="1">
                            <label class="form-check-label" for="is_free">Click to make it free </label>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="is_live" class="form-label">
                            Is live ?
                            <span class="text-info">(optional)</span>
                        </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="is_live" id="is_live" value="1">
                            <label class="form-check-label" for="is_live">Click to make it live </label>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="banner" class="form-label">
                            Banner image <span class="text-info">(optional)</span>
                        </label>
                        <input type="file" name="banner" id="banner" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-12 col-md-9 mb-3">
                            <label for="title" class="form-label">
                                Title
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="Enter lecture name" required value="{{ old('title') }}">
                        </div>
                        <div class="col-12 col-md-3 mb-3">
                            <label for="type" class="form-label">
                                Type
                                <span class="text-danger">*</span>
                            </label>
                            <select name="type" id="type" class="form-control" required>
                                @foreach ($types as $type => $typeString)
                                    <option value="{{ $type }}" {{ old('type') === $type ? 'selected' : '' }}>
                                        {{ $typeString }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-md-12 mb-3 is-video">
                            <div class="d-flex justify-content-between">
                                <label for="video_url" class="form-label">
                                    Video file / Embedd URL
                                    <span class="text-danger">*</span>
                                </label>
                                <label>
                                    <input type="checkbox" id="is-video-checkbox" checked>
                                    Provide Video
                                </label>
                            </div>
                            <input type="file" name="video_url" id="video_url" class="form-control">
                            <input type="url" name="embedded_url" id="embedded_url" class="form-control"
                                placeholder="Enter embedd URL" value="{{ old('embedded_url') }}">
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <label for="editor" class="form-label">
                                Description
                                <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" name="description" id="editor" rows="3">{!! old('description') !!}</textarea>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <label for="meta_description" class="form-label">
                                Meta Description
                                <span class="text-info">(optional)</span>
                            </label>
                            <textarea class="form-control" name="meta_description" id="meta_description" rows="2">{!! old('meta_description') !!}</textarea>
                        </div>
                        <div class="col-6 col-md-6 mb-3">
                            <label for="meta_keywords" class="form-label">
                                Meta Keywords
                                <span class="text-info">(optional)</span>
                            </label>
                            <textarea class="form-control" name="meta_keywords" id="meta_keywords" rows="2">{!! old('meta_keywords') !!}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('admin.lessons.index', $course->id) }}" class="btn btn-secondary mr-3">
                            Cancel
                        </a>

                        <button type="submit" class="btn btn-success">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $("#embedded_url").hide();
        $("#type").on('change', function(e) {
            const type = e.target.value;

            if (type !== 'video') {
                $(".is-video").hide('slow');
            } else {
                $(".is-video").show('slow');
            }
        });

        $("#is-video-checkbox").on('click', function(e) {
            if ($("#is-video-checkbox").is(':checked')) {
                $("#video_url").show();
                $("#embedded_url").hide();
            } else {
                $("#video_url").hide();
                $("#embedded_url").show();
            }
        });
    </script>
@endsection
