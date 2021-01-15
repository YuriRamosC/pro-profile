<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Builder;

use App\Curriculums;
use Illuminate\Http\Request;
class CurriculumsController extends Controller {

    public function index() {
        $curriculums = Curriculums::with('formations', 'knowledges', 'courses', 'languages', 'jobs')->findOrFail(1);
        return response()->json($curriculums);
    }

    public function showAll() {
        $curriculums = Curriculums::with('formations', 'knowledges', 'courses', 'languages', 'jobs')->findOrFail(1);
        return response()->json($curriculums);
    }

    public function create(Request $request) {
        $curriculum = new Curriculums;
        $curriculum->address=$request->input('address');
        $curriculum->phone= $request->input('phone');
        $curriculum->cellphone = $request->input('cellphone');
        $curriculum->id_user = $request->input('id_user');
        $curriculum->save();

        $curriculum = Curriculums::where('id_user', $request->input('id_user'))->get();
        return response()->json($curriculum);
    }

   /* public function store(Request $request) {
        //
    }*/

    public function show($id)
    {
        $curriculum = Curriculums::where('id_user', $id)
        ->with('formations', 'knowledges', 'courses', 'languages', 'jobs')
        ->get();
        return response()->json($curriculum);
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        $curriculum = Curriculums::find($id);
        $curriculum->address = $request->input('address');
        $curriculum->phone= $request->input('phone');
        $curriculum->cellphone = $request->input('cellphone');
        //$curriculum->jobs()->attach(1, ['company' => $request->input('company')]);
        $curriculum->save();
        return response()->json($curriculum->with('formations', 'knowledges', 'courses', 'languages', 'jobs')
        ->get());
    }

    public function destroy($id) {
        //
    }
}
