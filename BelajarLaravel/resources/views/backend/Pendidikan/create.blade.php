@extends('backend/layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i>Riwayat Hidup</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-homne"><a href="{{url('dashboard')}}">Home</a></i></li>
                    <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                    <li><i class="fafa-files-o"></i>Pendidikan</li>
                </ol>
            </div>
        </div>
        <!-- Form validations -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Pendidikan
                    </header>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There are some problems with your input. <br><br>
                    <ul>
                        @foreach ($errors as $errror)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif 
                <div class="panel-body">
                    <div class="form">
                        <form class="form-validate form-horizontal" id="pendidikan_form" method="POST" 
                        action="{{ route('pendidikan.store') }}">
                            {!!csrf_field() !!}
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Nama Sekolah <span 
                                    class="required">*</span> </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="nama" name="nama" minlength="5" 
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cemail" class="control-label col-lg-2">Tingkatan <span
                                     class="required">*</span></label>
                                <div class="col-lg-10">
                                    <select name="tingkatan" id="tingkatan" class="form-control m-bot15" required>
                                        <option value="1">TK</option>
                                        <option value="2">SD</option>
                                        <option value="3">SMP</option>
                                        <option value="4">SMA/SMK</option>
                                        <option value="5">D3</option>
                                        <option value="6">D4/S1</option>
                                        <option value="7">S2</option>
                                        <option value="8">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2">Tahun Masuk <span
                                     class="required">*</span>  </label>
                                <div class="col-lg-10">
                                    <input type="text" id="tahun_masuk" name="tahun_masuk" class="form-control"
                                     required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2">Tahun Selesai <span
                                     class="required">*</span>  </label>
                                <div class="col-lg-10">
                                    <input type="text" id="tahun_keluar" name="tahun_keluar" class="form-control"
                                     required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{route('pendidikan.index')}}"><button class="btn btn-default" type="button">Cancel</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                
                </div>  
                </section>
            </div>
        </div>
        <!-- page end -->
    </section>    
</section>       
@endsection
@push('content-css')
<link rel="stylesheet" href="{{ asset('backend/css/bootstrap-datepicker.css')}}">    
@endpush
@push('content-js')
<script href="{{ asset('backend/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript">
    $('#tahun_masuk').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });$('#tahun_keluar').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
</script>    
@endpush