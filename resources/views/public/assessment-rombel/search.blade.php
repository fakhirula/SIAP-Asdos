@extends('layout')
@section('content')
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Penilaian</h4>
                </div>
                <!-- table hover -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th rowspan="2">#</th>
                                    <th rowspan="2">Mahasiswa</th>
                                    <th colspan="16">Pertemuan ke</th>
                                    <th rowspan="2">Nilai Akhir</th>
                                    <th rowspan="2">Action</th>
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
                                <?php
                                $id = 1;
                                foreach ($assmts as $row) :
                                ?>
                                    <tr class="text-center">
                                        <td>{{ $id++ }}</td>
                                        <td>{{ $row->user->name }}</td>
                                        <td>{{ $row->assmt_1 }}</td>
                                        <td>{{ $row->assmt_2 }}</td>
                                        <td>{{ $row->assmt_3 }}</td>
                                        <td>{{ $row->assmt_4 }}</td>
                                        <td>{{ $row->assmt_5 }}</td>
                                        <td>{{ $row->assmt_6 }}</td>
                                        <td>{{ $row->assmt_7 }}</td>
                                        <td>{{ $row->assmt_uts }}</td>
                                        <td>{{ $row->assmt_8 }}</td>
                                        <td>{{ $row->assmt_9 }}</td>
                                        <td>{{ $row->assmt_10 }}</td>
                                        <td>{{ $row->assmt_11 }}</td>
                                        <td>{{ $row->assmt_12 }}</td>
                                        <td>{{ $row->assmt_13 }}</td>
                                        <td>{{ $row->assmt_14 }}</td>
                                        <td>{{ $row->assmt_uas }}</td>
                                        <td>{{ $row->assmt_final }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <p class="fw-bold">Keterangan</p>
                    <table class="table-sm">
                        <tr>
                            <td class="align-top">Nilai Tugas</td>
                            <td class="align-top">:</td>
                            <td>
                                <table>
                                    <tr>
                                        <ol>
                                            <li>Presensi</li>
                                            <li>Tugas dan Praktikum</li>
                                            <li>Aktivitas selama praktikum</li>
                                            <li>Dan hal seputar itu</li>
                                        </ol>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-top">Nilai Akhir</td>
                            <td class="align-top">:</td>
                            <td>
                                <table>
                                    <tr>
                                        <ol>
                                            <li>Nilai Tugas (35%)</li>
                                            <li>Nilai UTS (30%)</li>
                                            <li>Nilai UAS (35%)</li>
                                        </ol>
                                    </tr>
                                </table>
                            </td>
                        </tr>
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