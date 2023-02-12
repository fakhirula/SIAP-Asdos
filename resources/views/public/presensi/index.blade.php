@extends('layout')
@section('content')
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Kehadiran</h4>
                </div>
                    <!-- table hover -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th rowspan="2">#</th>
                                        <th rowspan="2">Mata Kuliah / Kelas</th>
                                        <th colspan="16">Pertemuan ke</th>
                                        <th rowspan="2">Persentase Kehadiran</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>UTS</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th>11</th>
                                        <th>12</th>
                                        <th>13</th>
                                        <th>14</th>
                                        <th>UAS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td>Pemrograman Web 1</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>H</td>
                                        <td>-</td>
                                        <td>94%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="fw-bold">Keterangan</p>
                        <table class="table-sm">
                            <tr>
                                <td>-</td>
                                <td>:</td>
                                <td>Presensi belum dimasukkan</td>
                            </tr>
                            <tr>
                                <td>H</td>
                                <td>:</td>
                                <td>Hadir</td>
                            </tr>
                            <tr>
                                <td>I</td>
                                <td>:</td>
                                <td>Izin atau Sakit dengan keterangan</td>
                            </tr>
                            <tr>
                                <td>A</td>
                                <td>:</td>
                                <td>Izin atau Sakit atau Tidak hadir tanpa keterangan</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection