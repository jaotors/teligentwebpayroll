<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class PayslipController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('payslip');
	}

	public function generateExcelFile() 
	{
		$excel = \App::make('excel');
		$inputs = Request::all();
		
		/*echo "<pre>";
		print_r($inputs);
		echo "</pre>";die;*/

		$excel->create('Test Xlsx', function($ex) use ($inputs) {

			$ex->sheet('Test Sheet', function($sheet) use ($inputs) {
			    $sheet->loadView('excel.generatepayslip', array('input' => $inputs));
			});

		})->download('xlsx');
	}

}
