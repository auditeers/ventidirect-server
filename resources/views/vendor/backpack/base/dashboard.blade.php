@extends(backpack_view('blank'))

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="card">

                <div class="card-header">
                    TEST1
                </div>

                <div class="card-body">
                    <canvas id="myChart1" style="max-height:120px;height:120px;"></canvas>
                </div>
            </div> 
        </div>

        <div class="col-3">
            <div class="card">

                <div class="card-header">
                    TEST2
                </div>

                <div class="card-body">
                    <canvas id="myChart2" style="max-height:120px;height:120px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">

                <div class="card-header">
                    TEST3
                </div>

                <div class="card-body">
                    <canvas id="myChart3" style="max-height:120px;height:120px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">

                <div class="card-header">
                    TEST4
                </div>

                <div class="card-body">
                    <canvas id="myChart4" style="max-height:120px;height:120px;"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>




{{-- In case widgets have been added to a 'content' group, show those widgets. --}}
@include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('group', 'content')->toArray() ])

@endsection