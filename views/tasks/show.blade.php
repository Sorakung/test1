@extends('layout.mainlayout')

    <div class="container">
        <h1 class="mt-5 pt-5">showing task [{{$task->title}}]</h1>


        <div class="jumbotrom text-center">
            <p>
                <strong>task title</strong> {{$task->title}} <br>
                <strong>description</strong> {{$task->description}} 
            </p>
        </div>
    </div>