<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // タスク一覧
    public function index()
    {
        return Task::all();
    }

    // タスク詳細
    public function show(Task $task)
    {
        return $task;
    }
}
