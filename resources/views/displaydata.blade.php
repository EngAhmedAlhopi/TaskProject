@extends('layouts.app')
@section('title')
    Task Data
@endsection
@section('content')
<style>
    input{
        border: none;
    }
    textarea{
        resize: none;
        border: none;
    }
    form{
        font-size: large;
    }
    label{
        font-size: x-large;
    }
</style>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Task Id</th>
            <th scope="col">Task Name</th>
            <th scope="col">Task Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    {{-- @isset($task)
    <form action="{{ route('update',[$task->id]) }}" method="POST">
        @method('PUT')
        <tbody>
            <tr>
                <th scope="row">{{ $task->id }} </th>
                <td>@csrf<input type="text" name="name" value="{{ $task->name }}"></td>
                <td>@csrf<textarea name="description" rows="4" cols="50">{{ $task->description }}</textarea></td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
                <td>
                    <button type="submit" class="btn btn-success">
                        Save
                    </button>
            </td>
            </tr>
        </tbody>
    </form>
    @endisset --}}
    @if (isset($task))
    <form action="{{ route('update',[$task->id]) }}" method="POST">
        @method('PUT')
        <tbody>
            <tr>
                <th scope="row">{{ $task->id }} </th>
                <td>@csrf<input type="text" name="name" value="{{ $task->name }}"></td>
                <td>@csrf<textarea name="description" rows="4" cols="50">{{ $task->description }}</textarea></td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
                <td>
                    <button type="submit" class="btn btn-success">
                        Save
                    </button>
            </td>
            </tr>
        </tbody>
    </form>
    @else
        <label for="">Updted Don.</label>
    @endif
</table>
@endsection
