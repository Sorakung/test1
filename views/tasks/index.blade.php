@extends('layout.mainlayout')

    <div class="container mt-5 pt-5">
            @if (Session::has('message'))
            <div class="alert-info">{{Session::get('message')}}</div>
        
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task Title</th>
                    <th scope="col">Task Description</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        </table>
        <tbody>
            @foreach ($tasks as $task)
                <th scope="row">{{$task->id}}</th>
                <td><a href="/tasks/{{$task->id}}">{{$task->title}}</a></td>
                <td>{{$task->description}}</td>
                <td>{{$task->created_at->toFormattedDateString()}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{URL::to('tasks/'.$task->id.'/edit')}}">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                    </div>
                </td>
            @endforeach
        </tbody>
    </div>
        


