<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Task::create([
        //     'title'=>'task title',
        //     'content'=>'task content',
        //     'day'=>'satrday',
        //      'user_id'=>1,
        //      'status'=>'done',
        // ]);
        Task::factory(5)->create();
    }
}
