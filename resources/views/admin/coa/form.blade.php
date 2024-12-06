@extends('layouts.admin.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box mb-0 d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0 m-0 font-size-18 page-title">Chart of Accounts (COA)</h2>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item">COA</li>
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
                            <h4 class="card-title">{{ @$data->id ? 'Edit' : 'Create' }} COA</h4>
                            <p class="card-title-desc">Please fill out the form below completely.</p>
                            <form action="{{ route('coa.store') }}" method="post" class="needs-validation">
                                @csrf
                                <input type="hidden" name="id" class="form-control" id="id" value="{{ @$data->id }}">

                                <div class="row mb-4">
                                    <label for="code" class="col-sm-3 col-form-label">Code</label>
                                    <div class="col-sm-3">
                                        <input name="code" class="form-control @error('code') is-invalid @enderror" value="{{ old('code', @$data->code) }}" placeholder="Code">
                                        @if ($errors->has('code'))
                                            <span class="text-danger">{{ $errors->first('code') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="coa_name" class="col-sm-3 col-form-label">Akun</label>
                                    <div class="col-sm-6">
                                        <input name="coa_name" class="form-control @error('coa_name') is-invalid @enderror" value="{{ old('coa_name', @$data->coa_name) }}" placeholder="Akun">
                                        @if ($errors->has('coa_name'))
                                            <span class="text-danger">{{ $errors->first('coa_name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="cost_id" class="col-sm-3 col-form-label">Cost Center</label>
                                    <div class="col-sm-6">
                                        <select name="cost_id" class="form-control @error('cost_id') is-invalid @enderror">
                                            <option value="">Select Cost Center</option>
                                            @foreach ($cost_centers as $cc)
                                                <option value="{{ $cc->id }}" {{ old('cost_id', @$data->cost_id) == $cc->id ? 'selected' : '' }}>{{ $cc->cost_name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('cost_id'))
                                            <span class="text-danger">{{ $errors->first('cost_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="position" class="col-sm-3 col-form-label">Posisi</label>
                                    <div class="col-sm-3">
                                        <select name="position" class="form-control @error('position') is-invalid @enderror">
                                            <option value="debit" {{ old('position', @$data->position) == 'debit' ? 'selected' : '' }}>Debit</option>
                                            <option value="credit" {{ old('position', @$data->position) == 'credit' ? 'selected' : '' }}>Credit</option>
                                        </select>
                                        @if ($errors->has('position'))
                                            <span class="text-danger">{{ $errors->first('position') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-7">
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi">{{ old('description', @$data->deskripsi) }}</textarea>
                                        @if ($errors->has('deskripsi'))
                                            <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-3">
                                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                                            <option value="true" {{ old('status', @$data->status) == true ? 'selected' : '' }}>Aktif</option>
                                            <option value="false" {{ old('status', @$data->status) == false ? 'selected' : '' }}>Tidak Aktif</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary w-md">Save</button>
                                        <a href="{{ route('coa.index') }}" class="btn btn-light w-md">Back</a>
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
