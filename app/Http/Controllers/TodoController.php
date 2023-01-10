<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use domain\Facades\TodoFacade;

class TodoController extends Controller
{
    public function index()
    {
        $response['tasks'] = TodoFacade::all();
        return view('pages.todo.index')->with($response);
    }

    public function store(Request $request)
    {
        TodoFacade::store($request->all());
        return redirect()->back();
        
    }

    public function delete($task_id)
    {
        TodoFacade::delete($task_id);
        return redirect()->back();
    }

    public function done($task_id)
    {
        TodoFacade::done($task_id);
        return redirect()->back();
    }

    public function undone($task_id)
    {
        TodoFacade::undone($task_id);
        return redirect()->back();
    }

    public function edit(Request $request)
        {
            $response['task'] = TodoFacade::get($request[task_id]);
            return view('pages.todo.edit')->with($response);
        }

        public function update(Request $request, $task_id)
        {
            TodoFacade::update($request->all(), $task_id);
        }

    // public function edit(Request $request)
    // {
    //     TodoFacade::edit($request);
    //     return view('pages.todo.edit')->with($response);
    // }

    // public function update(Request $request, $task_id)
    // {
    //     $task = $this->task->find($task_id);
    //     //$task->update();$task->title = $request['title'];
    //     $task->title = $request->title;
    //     $task->update();

    //     return redirect()->back();
    // }
}

