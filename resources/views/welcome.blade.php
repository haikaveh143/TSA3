@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<div class="card">
    <h1>Welcome to Tasks for Today!</h1>

    <p>Here are your tasks scheduled for today.</p>

    <p><strong>Date:</strong> {{ today()->format('F d, Y') }}</p>
</div>

<div class="card">
    <h2>Today's Tasks</h2>

    <br>

    <table>
        <tr>
            <th>Task Title</th>
            <th>Status</th>
            <th>Date</th>
        </tr>

        @forelse ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>

                <td class="{{ $task->status }}">
                    {{ ucfirst($task->status) }}
                </td>

                <td>{{ $task->task_date }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No tasks scheduled for today.</td>
            </tr>
        @endforelse

    </table>
</div>

@endsection