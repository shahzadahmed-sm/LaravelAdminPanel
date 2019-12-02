@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.brand.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.brands.update", [$brand->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="brand_name">{{ trans('cruds.brand.fields.brand_name') }}</label>
                <input class="form-control {{ $errors->has('brand_name') ? 'is-invalid' : '' }}" type="text" name="brand_name" id="brand_name" value="{{ old('brand_name', $brand->brand_name) }}" required>
                @if($errors->has('brand_name'))
                    <span class="text-danger">{{ $errors->first('brand_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.brand.fields.brand_name_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $brand->is_active || old('is_active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">{{ trans('cruds.brand.fields.is_active') }}</label>
                </div>
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.brand.fields.is_active_helper') }}</span>
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