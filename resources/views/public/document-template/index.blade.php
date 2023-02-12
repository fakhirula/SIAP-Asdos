@extends('layout')
@section('content')
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Template Surat</h4>
                </div>
                <!-- table hover -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Dokumen Template</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Surat Permohonan Izin</td>
                                    <td><a href="{{ asset('assets/files/surat-permohonan-izin.docx') }}" class="btn btn-outline-secondary btn-sm" download>Download</a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Surat Keterangan Sakit</td>
                                    <td><a href="{{ asset('assets/files/surat-keterangan-sakit.docx') }}" class="btn btn-outline-secondary btn-sm" download>Download</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection