<?php

namespace hospital\Http\Controllers;



use Khill\Lavacharts\Lavacharts;

class ChartController extends Controller
{
	public function index()
	{

		$reasons = \Lava::DataTable();

$reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent')
        ->addRow(['AIDS', 35])
        ->addRow(['TB', 12])
        ->addRow(['CANCER', 14])
        ->addRow(['ACCIDENTS', 39]);

\Lava::DonutChart('Death', $reasons, [
   'title'  => 'Causes of Death',
    'is3D'   => true,
    'slices' => [
        ['offset' => 0.2],
        ['offset' => 0.25],
        ['offset' => 0.3],
     
    ]
]);


       return view('charts.charts');
	
	}
	
}

