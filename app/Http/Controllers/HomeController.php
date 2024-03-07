<?php

namespace App\Http\Controllers;

use App\Http\Services\FileService;
use Illuminate\Http\Request;
use App\Models\Person;

class HomeController extends Controller
{
    
    /**
     * index
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $persons = Person::with('country')->paginate(100);

        return view('welcome')->with('persons', $persons);
    }
    
    /**
     * uploadCSV
     *
     * @param  mixed $request
     * @param  mixed $fileService
     * @return \Illuminate\Http\RedirectResponse

     */
    public function uploadCSV(Request $request, FileService $fileService)
    {
        $file = $request->all()['csv_file'];
        $fileService->parseCSVdata($file->getContent());

        $persons = Person::with('country')->paginate(100);

        return back()->with('persons', $persons);
   
    }

}
