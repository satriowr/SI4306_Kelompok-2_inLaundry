<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\note;
use DB;

class admin_dashboardController extends Controller
{
    public function index(){
        $this->authorize('admin');
        $showNote = note::all();
        return view('Admin.dashboard', compact('showNote'));
    }

    public function deleteNote($id){
        DB::table('notes')->where('id',$id)->delete();
        $showNote = note::all();
        return view('Admin.dashboard', compact('showNote'));
    }

    public function newNote(Request $request){
        DB::table('notes')->insert([
            'event' => $request->event,
            'date' => $request->date,
        ]);

        return redirect('/admin/dashboard');
    }
}
