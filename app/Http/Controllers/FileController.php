<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use Excel;

class FileController extends Controller
{

    public function upload(Request $request)
    {
        // return "inn";
        // Validate the uploaded file
        $request->validate([
            'import_file' => 'required|file|mimes:csv,txt,xlsx',
        ]);

        // // Get the uploaded file
        // $file = $request->file('import_file');

        // // Store the file in the storage/app directory
        // $path = $file->store('import_files', 'local');

        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
          return  $data = Excel::import($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['name' => $value->name, 'details' => $value->details];
                }
                if(!empty($arr)){
                    \DB::table('products')->insert($arr);
                    dd('Insert Record successfully.');
                }
            }
        }
return "outt";
        // Return a response or redirect as needed
        return redirect()->back()->with('success', 'CSV file uploaded and data stored in the database');
    }
}
