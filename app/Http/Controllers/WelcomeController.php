<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class WelcomeController extends Controller
{
    public function index()
    {
        $tasks = Task::whereDate('task_date', today())
                     ->orderBy('task_date', 'asc')
                     ->get();

        return view('welcome', compact('tasks'));
    }
}