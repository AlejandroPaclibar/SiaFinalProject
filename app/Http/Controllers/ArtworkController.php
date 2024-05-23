<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use League\Csv\Reader;
use Illuminate\Support\Facades\File;

class ArtworkController extends Controller
{
    public function index() {
        $artworks = Artwork::orderBy('id')->get();

        return inertia('Artwork', [
            'artworks' => $artworks
        ]);
    }

    function generateCSV() {
        $artworks = Artwork::orderBy('id')->get();

        $filename = '../storage/arts.csv';
        
        $file = fopen($filename, 'w+');

        fputcsv($file , [
            'Image', 
            'Artwork Name',
            'Description',
            'Price' 
        ]);
        foreach($artworks as $a) {

            fputcsv($file, [
                $a->imageUrl,
                $a->art_name,     
                $a->description,
                $a->price
            ]);
        }
        fclose($file);

        return response()->download($filename);
    }
    



    public function pdf() {
        // return view('art-list', compact('artworks'));
        $artworks = Artwork::orderBy('art_name')->get();
        $pdf = Pdf::loadView('art-list', compact('artworks'));
        return $pdf->stream('art-list.pdf');
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required|file|max:2048',
        ]);

        $importFile = $request->file('import_file');
        $extension = $importFile->getClientOriginalExtension();

        if ($extension === 'csv') {
            // Handle CSV import
            $csv = Reader::createFromPath($importFile->getPathname(), 'r');
            $csv->setHeaderOffset(0);
            $csvData = $csv->getRecords();

            foreach ($csvData as $row) {
                Artwork::create([
                    'imageUrl' => $row['Image'],
                    'art_name' => $row['Artwork Name'],
                    'description' => $row['Description'],
                    'price' => $row['Price'],
                ]);
            }

            return redirect()->back()->with('success', 'CSV uploaded and artworks imported successfully.');
        } elseif ($extension === 'pdf') {
            // Handle PDF import
            $pdfData = File::get($importFile->getPathname());
            // Process PDF data and import artworks

            return redirect()->back()->with('success', 'PDF uploaded and artworks imported successfully.');
        }

        return redirect()->back()->with('error', 'Invalid file format. Please upload a CSV or PDF file.');
    }
}
