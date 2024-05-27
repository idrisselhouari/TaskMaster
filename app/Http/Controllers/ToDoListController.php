<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;


class ToDoListController extends Controller
{

    public function index(){
        return view('welcome', ['listItems' => ListItem::where('is_completed', 0)->get()]);
    }

    public function signUp(){
        return view('signup');
    }
    public function signIn(){
        return view('signin');
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
    
    public function markCompleted($id){
        // return view('welcome', ['listItems' => ListItem::all()]);
        $listTask = ListItem::find($id);
        $listTask->is_completed = 1;
        $listTask->save();

        return redirect('/');
    }

    public function markNotCompleted($id){
        // return view('welcome', ['listItems' => ListItem::all()]);
        $listTask = ListItem::find($id);
        $listTask->is_completed = 0;
        $listTask->save();

        return redirect('/');
    }

    public function deleteTask($id)
    {
        $task = ListItem::findOrFail($id);
        $task->delete();
        
        return redirect('/');
    }
}
 