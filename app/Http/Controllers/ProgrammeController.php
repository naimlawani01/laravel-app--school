<?php

namespace App\Http\Controllers;

use App\Departement;
use App\Programme;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkAdmin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes = Programme::paginate(5);
        return view('admin.programme.index', compact('programmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departements = Departement::all();
        return view('admin.programme.addProgram',compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomProg' => 'required',
            'nomDept' => 'required',
        ]);

        $programme = new Programme();
        $programme->nomProg = $request->nomProg;
        $programme->nomDept = $request->nomDept;
        $programme->save();
        return redirect()->route('programme.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programme = Programme::find($id);
        $departements = Departement::all();
        return view('admin.programme.editProgram', compact('programme','departements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nomProg' => 'required',
            'nomDept' => 'required',
        ]);

        Programme::whereId($id)->update($data);
        return redirect()->route('programme.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programme $programme)
    {
        $programme->delete();
        return redirect()->route('programme.index');
    }
}
