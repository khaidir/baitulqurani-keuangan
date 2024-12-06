@extends('layouts.admin.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box mb-0 d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0 m-0 font-size-18 page-title">Dashboard</h2>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="text-dark font-weight-bolder font-size-h2">300 Juta</div>
                        <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Hari ini</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="text-dark font-weight-bolder font-size-h2">2 M</div>
                        <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Minggu ini</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="text-dark font-weight-bolder font-size-h2">7 M</div>
                        <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Bulan ini</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <div class="text-dark font-weight-bolder font-size-h2">12 M</div>
                        <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Total</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-sm-6">
                <div class="card py-3 px-3">

                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card py-3 px-3">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection

