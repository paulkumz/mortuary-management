@extends('templates.content')

@section('content')
<div id="chart-div"  style="width: 900px; height: 500px;">
	
</div>

<?= Lava::render('DonutChart', 'Death', 'chart-div') ?>



@stop