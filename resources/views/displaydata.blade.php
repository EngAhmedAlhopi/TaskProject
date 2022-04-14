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
    <form action="update" method="POST">

        <tbody>
            <tr>
                <th scope="row">@csrf<input type="text" value="{{ $task->id }}" disabled></th>
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

</table>
@endsection
