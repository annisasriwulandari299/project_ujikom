@extends('layouts.frontend.template')

@section('content')
<div class="row">
    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Grafik Pemasukan & Pengeluaran</h5>
                    </div>
                </div>
                <div id="financeChart"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        chart: {
            type: 'bar',
            height: 350
        },
        series: [
            {
                name: 'Pemasukan',
                data: @json($pemasukanData)
            },
            {
                name: 'Pengeluaran',
                data: @json($pengeluaranData)
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
                text: 'Jumlah (Rp)'
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#financeChart"), options);
    chart.render();
</script>
@endsection
