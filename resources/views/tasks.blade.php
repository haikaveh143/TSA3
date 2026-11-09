@extends('layouts.app')

@section('title', 'Task List')

@section('content')

<div class="card">
    <h1>Task List</h1>

    <p>View all your recorded tasks below.</p>
</div>

<div class="card">

    <table>
        <tr>
            <th>ID</th>
            <th>Task Title</th>
            <th>Status</th>
            <th>Task Date</th>
        </tr>

        @forelse ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>

                <td>{{ $task->title }}</td>

                <td class="{{ $task->status }}">
                    {{ ucfirst($task->status) }}
                </td>

                <td>{{ $task->task_date }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No tasks found.</td>
            </tr>
        @endforelse

    </table>

</div>

@endsection