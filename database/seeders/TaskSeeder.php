<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        // Create exactly one user
        User::create([
            'username' => 'timothy',
            'full_name' => 'Timothy James Pangilinan',
            'email' => 'timothy@gmail.com'
        ]);

        // Today's tasks
        Task::create([
            'title' => 'Finish Laravel assignment',
            'status' => 'pending',
            'task_date' => today()
        ]);

        Task::create([
            'title' => 'Review programming lessons',
            'status' => 'completed',
            'task_date' => today()
        ]);

        Task::create([
            'title' => 'Study for upcoming quiz',
            'status' => 'pending',
            'task_date' => today()
        ]);

        // Yesterday's tasks
        Task::create([
            'title' => 'Read Chapter 1',
            'status' => 'completed',
            'task_date' => today()->subDay()
        ]);

        Task::create([
            'title' => 'Practice PHP programming',
            'status' => 'completed',
            'task_date' => today()->subDay()
        ]);

        // Tomorrow's tasks
        Task::create([
            'title' => 'Prepare project presentation',
            'status' => 'pending',
            'task_date' => today()->addDay()
        ]);

        Task::create([
            'title' => 'Complete school activities',
            'status' => 'pending',
            'task_date' => today()->addDay()
        ]);

        Task::create([
            'title' => 'Review Laravel routes',
            'status' => 'pending',
            'task_date' => today()->addDay()
        ]);
    }
}