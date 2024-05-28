<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;


class CompletedTasksController extends Controller
{
    public function ListCompletedTasks(){
        $user_id = session('user_id');
        // return view('completedtasks');
        return view('completedtasks', ['listItems' => Tasks::where('is_completed', 1)->where('user_id', $user_id)
                                                        ->orderBy('updated_at', 'desc')->get()]);

    }
}
