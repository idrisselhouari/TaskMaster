<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;


class CompletedTasksController extends Controller
{
    public function ListCompletedTasks(){
        // return view('completedtasks');
        return view('completedtasks', ['listItems' => Tasks::where('is_completed', 1)->orderBy('updated_at', 'desc')->get()]);

    }
}
