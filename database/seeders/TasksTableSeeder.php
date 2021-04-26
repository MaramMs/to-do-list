<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create(
            [
              'title'=>'Task title',
              'content'=>'content of task',
              'day_id'=>1,
              'user_id'=>1,
              'status'=>'done',
                          ]
            );
    }
}
