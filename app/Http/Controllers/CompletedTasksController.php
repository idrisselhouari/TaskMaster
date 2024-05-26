<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;


class CompletedTasksController extends Controller
{
    public function ListCompletedTasks(){
        // return view('completedtasks');
        return view('completedtasks', ['listItems' => ListItem::where('is_completed', 1)->orderBy('updated_at', 'desc')->get()]);

    }
}
