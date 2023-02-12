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
                                    <th rowspan="2">Mata Kuliah / Kelas</th>
                                    <th colspan="16">Pertemuan ke</th>
                                    <th rowspan="2">Nilai Akhir</th>
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
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>95</td>
                                    <td>95</td>
                                    <td>80</td>
                                    <td>80</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>90</td>
                                    <td>95</td>
                                    <td>95</td>
                                    <td>90</td>
                                    <td>98</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <p class="fw-bold">Kriteria penilaian</p>
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
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection