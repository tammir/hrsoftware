@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Report</h2>
        <hr/>

        <?php
        $male = \App\Emploee::where('gender', '=', 'Male')->count();
        $female = \App\Emploee::where('gender', '=', 'Female')->count();
        ?>

        <div id="canvas-holder" style="width:40%">
            <canvas id="chart-area" />
        </div>

        <table class="table table-responsive">
            <thead>
            <tr>
                <th></th>
                <th>Quantity</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Male</td>
                <td><?php echo $male ?></td>
            </tr>
            <tr>
                <td>Female</td>
                <td><?php echo $female ?></td>
            </tr>
            </tbody>
        </table>

        <script type="text/javascript">

            var randomScalingFactor = function() {
                return Math.round(Math.random() * 100);
            };

            var config = {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [
                            <?php echo $male; ?>,
                            <?php echo $female; ?>
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        "Male",
                        "Female"
                    ]
                },
                options: {
                    responsive: true
                }
            };

            window.onload = function() {
                var ctx = document.getElementById("chart-area").getContext("2d");
                window.myPie = new Chart(ctx, config);
            };
        </script>
    </div>
@endsection
