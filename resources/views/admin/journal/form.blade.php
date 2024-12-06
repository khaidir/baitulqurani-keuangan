@extends('layouts.admin.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box mb-0 d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0 m-0 font-size-18 page-title">Jurnal Transaksi</h2>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item">Jurnal</li>
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
                            <h4 class="card-title">{{ @$data->id ? 'Edit' : 'Create' }} Jurnal</h4>
                            <p class="card-title-desc">Please fill out the form below completely.</p>
                            <form action="{{ route('journal.store') }}" method="post" class="needs-validation">
                                @csrf
                                <input type="hidden" name="id" class="form-control" id="id" value="{{ @$data->id }}">

                                <div class="row mb-4">
                                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', @$data->tanggal) }}">
                                        @if ($errors->has('tanggal'))
                                            <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="coa_id" class="col-sm-3 col-form-label">Akun</label>
                                    <div class="col-sm-6">
                                        <select name="coa_id" class="form-control @error('coa_id') is-invalid @enderror">
                                            <option value="">Select Akun</option>
                                            @foreach ($chart_of_accounts as $coa)
                                                <option value="{{ $coa->id }}" {{ old('coa_id', @$data->coa_id) == $coa->id ? 'selected' : '' }}>({{ $coa->code }}) {{ $coa->coa_name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('coa_id'))
                                            <span class="text-danger">{{ $errors->first('coa_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="tipe" class="col-sm-3 col-form-label">Tipe</label>
                                    <div class="col-sm-3">
                                        <select name="tipe" class="form-control @error('tipe') is-invalid @enderror">
                                            <option value="debit" {{ old('tipe', @$data->tipe) == 'debit' ? 'selected' : '' }}>Debit</option>
                                            <option value="credit" {{ old('tipe', @$data->tipe) == 'credit' ? 'selected' : '' }}>Credit</option>
                                        </select>
                                        @if ($errors->has('tipe'))
                                            <span class="text-danger">{{ $errors->first('tipe') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="nominal" class="col-sm-3 col-form-label">Nominal</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="nominal" class="form-control @error('nominal') is-invalid @enderror" value="{{ old('nominal', @$data->nominal) }}" placeholder="Nominal">
                                        @if ($errors->has('nominal'))
                                            <span class="text-danger">{{ $errors->first('nominal') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-7">
                                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi">{{ old('deskripsi', @$data->deskripsi) }}</textarea>
                                        @if ($errors->has('deskripsi'))
                                            <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary w-md">Save</button>
                                        <a href="{{ route('journal.index') }}" class="btn btn-light w-md">Back</a>
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
