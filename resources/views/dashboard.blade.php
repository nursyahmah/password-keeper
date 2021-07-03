@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div style="width: 18rem;">
            <div class="card card-stats mb-4 mb-lg-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total password saved</h5>
                            <span class="h2 font-weight-bold mb-0">10</span>
                        </div>
                        <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- @include('layouts.footers.auth') -->
    </div>
@endsection

<!-- @push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush -->