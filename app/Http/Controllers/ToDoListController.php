<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;


class ToDoListController extends Controller
{
    public function tasks(){
        return view('tasks', ['listItems' => Tasks::where('is_completed', 0)->get()]);
    }

    public function addTask(Request $request){

        $newTask = new Tasks;
        $newTask->task_title = $request->task_title;
        $newTask->task_note = $request->task_note;
        $newTask->task_date = $request->task_date;
        $newTask->user_id = 1;
        $newTask->is_completed = 0;
        $newTask->save();
        
        return redirect('/tasks');
    } 
    
    public function markCompleted($id){

        $listTask = Tasks::find($id);
        $listTask->is_completed = 1;
        $listTask->save();

        return redirect('/completedtasks');
    }

    public function markNotCompleted($id){
        
        $listTask = Tasks::find($id);
        $listTask->is_completed = 0;
        $listTask->save();

        return redirect('/tasks');
    }

    public function deleteTask($id)
    {
        $task = Tasks::findOrFail($id);
        $task->delete();
        
        return redirect('/tasks');
    }
}
 