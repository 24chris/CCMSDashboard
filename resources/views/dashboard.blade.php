@extends('layouts.app')

@section('content')


    <div class="container-fluid">


        <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card  mb-4 mb-xl-0">
                    <div class="card-body bg-dark ">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title  card-dark text-uppercase  text-light font-weight-bold mb-0">Officers</h5>
                                <span class="h2 font-weight-bold text-light mb-0">
                                    @if ($totalOfficers)
                                        {{$totalOfficers}}
                                    @else
                                        0
                                    @endif
                                </span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body bg-dark">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-light font-weight-bold mb-0">Patients</h5>
                                <span class="h2 font-weight-bold text-light mb-0">
                                    @if ($totalPatients)
                                        {{$totalPatients}}
                                    @else
                                        0
                                    @endif
                                </span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                    {{-- //fas fa-chart-pie --}}
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body bg-dark">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-around">
                                    <h5 class="card-title text-uppercase text-light font-weight-fold mb-0">TotalAmount</h5>
                                    <div class="icon icon-shape bg-primary mb-1 text-white rounded-circle shadow d-flex">
                                        <i class="fas fa-coins"></i>

                                </div>


                            </div>
                            <div class="col d-flex flex-column">
                                <span class="h2 font-weight-bold text-light mb-0">
                                    @if ($totalAmount)
                                      shs{{number_format($totalAmount,1)}}

                                    @else
                                         shs 0
                                    @endif
                                </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
@endsection

