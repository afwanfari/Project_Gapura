<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class KatalogController extends Controller
{
    public function download($filename)
    {
        $filePath = public_path('/' . $filename);

        if (!file_exists($filePath)) {
            abort(404, 'File not found.');
        }
        return response()->download($filePath);
    }
}
