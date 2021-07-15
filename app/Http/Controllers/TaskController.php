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

    // タスク登録
    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    // タスク詳細
    public function show(Task $task)
    {
        return $task;
    }

    // タスク更新
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return $task;
    }
}
