<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use PDF;

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

	public function generateFile() 
	{
		$excel = \App::make('excel');
		$inputs = Request::all();
		
		/*echo "<pre>";
		print_r($inputs);
		echo "</pre>";die;*/

		if ($inputs['generatetype'] == 'xls') {
			$excel->create('Test Xlsx', function($ex) use ($inputs) {
				$ex->sheet('Test Sheet', function($sheet) use ($inputs) {
				    $sheet->loadView('reports.excel.generateexcelpayslip', array('input' => $inputs));
				});
			})->download('xlsx');

		} else {
			/*$html = 
			  '<html><body>'.
			  '<p>Put your html here, or generate it with your favourite '.
			  'templating system.</p>'.
			  '</body></html>';

			$dompdf = new DOMPDF();
			$dompdf->load_html($html);
			$dompdf->render();
			$dompdf->stream("sample.pdf");*/
			
			$pdf = PDF::loadView('reports.pdf.generatepdfpayslip' , $inputs);
			return $pdf->stream();

		}
	}

}
