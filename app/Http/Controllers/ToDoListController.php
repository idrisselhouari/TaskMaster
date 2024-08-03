<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;


class ToDoListController extends Controller
{
    public function tasks(){
        $user_id = session('user_id');
        return view('tasks', ['listItems' => Tasks::where('is_completed', 0)->where('user_id', $user_id)->get()]);
    }

    public function addTask(Request $request){

        $newTask = new Tasks;
        $newTask->task_title = $request->task_title;
        $newTask->task_date = $request->task_date;
        $newTask->task_time_from = $request->task_time_from;
        $newTask->task_time_to = $request->task_time_to;
        $newTask->task_priority = $request->task_priority;
        $newTask->task_category = $request->task_category;
        // $newTask->task_status = $request->task_status;
        $newTask->task_description = $request->task_description;
        $newTask->task_tags = $request->task_tags;
        $newTask->is_completed = 0;
        $newTask->user_id = session('user_id');
        $newTask->save();
        
        return redirect('/mytasks');
    } 
    
    public function updateTask(Request $request, $id){
    
        $task = Tasks::find($id);
        $task->task_title = $request->task_title;
        $task->task_date = $request->task_date;
        $task->task_time_from = $request->task_time_from;
        $task->task_time_to = $request->task_time_to;
        $task->task_priority = $request->task_priority;
        $task->task_category = $request->task_category;
        // $task->task_status = $request->task_status;
        $task->task_description = $request->task_description;
        $task->task_tags = $request->task_tags;
    
        $task->save();
    
        return redirect('/mytasks');
    }
    

    public function markCompleted($id){

        $listTask = Tasks::find($id);
        $listTask->is_completed = 1;
        $listTask->save();

        return redirect('/mytasks/completed');
    }

    public function markNotCompleted($id){
        
        $listTask = Tasks::find($id);
        $listTask->is_completed = 0;
        $listTask->save();

        return redirect('/mytasks');
    }

    public function deleteTask($id)
    {
        $task = Tasks::findOrFail($id);
        $task->delete();
        
        return redirect('/mytasks');
    }
}
 