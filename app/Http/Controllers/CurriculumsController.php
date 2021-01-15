<?php

namespace App\Http\Controllers;


use App\Curriculums;
use Request;
class CurriculumsController extends Controller {

    public function index() {
        $curriculums = Curriculums::with('formations', 'knowledges', 'courses', 'languages', 'jobs')->findOrFail(1);
        return response()->json($curriculums);
    }

    public function showAll() {
        $curriculums = Curriculums::with('formations', 'knowledges', 'courses', 'languages')->findOrFail(1);
        return response()->json($curriculums);
    }

    public function create() {
        //
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
        $curriculum = Curriculums::find($id);
        $curriculum->address = Request::input('address');
        $curriculum->save();

        return "<h1>Success updating your Curriculum</h1>";
    }

    /*public function update(Request $request, $id) {
        //
    }*/

    public function destroy($id) {
        //
    }
}
