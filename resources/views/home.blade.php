@extends('layouts.frontend.admin')

@section('content')
<div class="row">
    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">User Login Overview</h5>
                    </div>
                </div>
                <div id="loginChart"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        chart: {
            type: 'line',
            height: 350
        },
        series: [
            {
                name: 'Login',
                data: @json($loginData)
            },
            {
                name: 'Register',
                data: @json($registerData)
            }
        ],
        xaxis: {
            categories: @json($months),
            title: {
                text: 'Bulan'
            }
        },
        yaxis: {
            title: {
                text: 'Jumlah'
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#loginChart"), options);
    chart.render();
</script>

@endsection
