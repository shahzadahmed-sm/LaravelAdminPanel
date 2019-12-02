@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.category.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.categories.update", [$category->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="parentid">{{ trans('cruds.category.fields.parentid') }}</label>
                <input class="form-control {{ $errors->has('parentid') ? 'is-invalid' : '' }}" type="number" name="parentid" id="parentid" value="{{ old('parentid', $category->parentid) }}" step="1">
                @if($errors->has('parentid'))
                    <span class="text-danger">{{ $errors->first('parentid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.parentid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="category_name">{{ trans('cruds.category.fields.category_name') }}</label>
                <input class="form-control {{ $errors->has('category_name') ? 'is-invalid' : '' }}" type="text" name="category_name" id="category_name" value="{{ old('category_name', $category->category_name) }}" required>
                @if($errors->has('category_name'))
                    <span class="text-danger">{{ $errors->first('category_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.category_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="is_active">{{ trans('cruds.category.fields.is_active') }}</label>
                <input class="form-control {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="text" name="is_active" id="is_active" value="{{ old('is_active', $category->is_active) }}">
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>


    </div>
</div>
@endsection