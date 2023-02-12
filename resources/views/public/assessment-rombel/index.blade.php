@extends('layout')
@section('content')
<section id="groups">
    <div class="row match-height">
        <div class="col-12 mt-3 mb-1">
            <h4 class="section-title text-uppercase">Daftar Penilaian</h4>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-12">
            <div class="card-group">
                <?php
                $id = 1;
                foreach ($rombels as $row) :
                ?>
                    <div class="card">
                        <div class="card-content">
                            <img class="card-img-top img-fluid" src="{{ asset('assets/images/samples/1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="{{ route('assessment-rombel.search', ['code' => $row->code]) }}">{{ $row->code }}</a></h4>
                                <p class="card-text">
                                    This card has supporting text below as a natural lead-in to additional
                                    content.</p>
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>
@endsection