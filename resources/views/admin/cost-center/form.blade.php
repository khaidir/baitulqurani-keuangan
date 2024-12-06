@extends('layouts.admin.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box mb-0 d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0 m-0 font-size-18 page-title">Cost Center</h2>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item">Cost Center</li>
                            <li class="breadcrumb-item active">Form</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-xl-8 col-sm-12">
                            <h4 class="card-title">{{ @$data->id ? 'Edit' : 'Create' }} Cost Center</h4>
                            <p class="card-title-desc">Please fill out the form below completely.</p>
                            <form action="{{ route('cost-center.store') }}" method="post" class="needs-validation">
                                @csrf
                                <input type="hidden" name="id" class="form-control" id="id" value="{{ @$data->id }}">

                                <div class="row mb-4">
                                    <label for="cost_name" class="col-sm-3 col-form-label">Cost Center</label>
                                    <div class="col-sm-6">
                                        <input name="cost_name" class="form-control @error('cost_name') is-invalid @enderror" value="{{ old('cost_name', @$data->cost_name) }}" placeholder="Cost Center">
                                        @if ($errors->has('cost_name'))
                                            <span class="text-danger">{{ $errors->first('cost_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="description" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-7">
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description">{{ old('description', @$data->description) }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-3">
                                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                                            <option value="true" {{ old('status', @$data->status) == true ? 'selected' : '' }}>Active</option>
                                            <option value="false" {{ old('status', @$data->status) == false ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary w-md">Save</button>
                                        <a href="{{ route('cost-center.index') }}" class="btn btn-light w-md">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
$(document).ready(function() {
    $('select').select2({
        placeholder: 'Choose'
    });
});
</script>
@endsection
