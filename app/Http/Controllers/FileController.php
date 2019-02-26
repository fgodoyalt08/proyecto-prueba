<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $files = File::sortable()->search()->paginate(5);

        return view('files.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);

        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);

        $request->validate([
            'title'=>'required',
            'description'=> 'required',
            'file'       => 'required|mimes:xls,xlsx,xml,xlt'
        ]);
        
        $file = new File([
            'title' => $request->get('title'),
            'description'=> $request->get('description')
        ]);
        
        $file->save();

        $result = Storage::disk('public')->put('archivos', $request->file('file'));
        $file->path = $result;
        
        $file->save();

        
        return redirect('/files')->with('success', 'Archivo agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, File $file)
    {
        $request->user()->authorizeRoles(['admin']);

        return view('files.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, File $file)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('files.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        $request->user()->authorizeRoles(['admin']);

        $request->validate([
            'title'=>'required',
            'description'=> 'required',
            'file'       => 'required|mimes:xls,xlsx,xml,xlt'
        ]);

        $file = File::find($file->id);
        $file->title = $request->get('title');
        $file->description = $request->get('description');
        
        $file->save();

        Storage::disk('public')->delete($file->path);

        $result = Storage::disk('public')->put('archivos', $request->file('file'));
        $file->path = $result;

        $file->save();

        return redirect('/files')->with('success', 'Archivo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, File $file)
    {
        $request->user()->authorizeRoles(['admin']);

        Storage::disk('public')->delete($file->path);

        $file = File::find($file->id);
        $file->delete();

        return redirect('/files')->with('success', 'Archivo eliminado con éxito');
    }
}
