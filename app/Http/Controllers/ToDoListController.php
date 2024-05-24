<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;


class ToDoListController extends Controller
{

    public function index(){
        return view('welcome', ['listItems' => ListItem::where('is_completed', 0)->get()]);
    }

    public function markCompleted($id){
        // return view('welcome', ['listItems' => ListItem::all()]);
        $listTask = ListItem::find($id);
        $listTask->is_completed = 1;
        $listTask->save();

        return redirect('/');
 
    }

    public function addTask(Request $request){
        $newTask = new ListItem;
        $newTask->task_title = $request->inputItem;
        $newTask->task_date = $request->dateItem;
        $newTask->is_completed = 0;
        $newTask->save();
        
        // return view('welcome', ['listItems' => ListItem::all()]);
        return redirect('/');
    }
}
 