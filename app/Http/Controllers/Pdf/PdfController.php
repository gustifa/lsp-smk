<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;

class PdfController extends Controller
{
    public function index()
    {
        return view('mergePDF');
    }
      
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'mimes:pdf'
        ]);
      
         if($request->hasFile('filenames')){
            $pdf = PDFMerger::init();
      
            foreach ($request->file('filenames') as $key => $value) {
                $pdf->addPDF($value->getPathName(), 'all');
            }
       
            $fileName = time().'.pdf';
            $pdf->merge();
            $pdf->save(public_path($fileName));
  
        }
      
        return response()->download(public_path($fileName));
    }
}
