@extends('layouts.app')
@section('content')
    <style>
        h2{
            margin-bottom: 15px;
        }
        h4{
            margin-left: 70px;
        }
        span{
            color: blue;
        }
    </style>
    <h2>
        Task Data
    </h2>
    <h4>
        <span>Task ID: </span>{{ $task->id }}
    </h4>
    <h4>
        <span>Task Name: </span>{{ $task->name }}
    </h4>
    <h4>
        <span>Task Description: </span>{{ $task->description }}
    </h4>
    <h4>
        <span>Date Created: </span>{{ $task->created_at }}
    </h4>
    <h4>
        <span>Last Modified Date: </span>{{ $task->updated_at }}
    </h4>
@endsection
