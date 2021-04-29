<x-admin-layout title="Tasks List">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <!-- <th>Content</th> -->
                <th>Day</th>
                <th>User_Id</th>
                <th>Status</th>
                <th>Created_at</th>
            </tr>
        </thead>
        <tbody>
            @if(count($tasks)>0)
            @foreach ($tasks as $task)
            <tr>
                <td> {{$task->id}} </td>
                <td>{{$task->title}}</td>

                <td>{{$task->day}} </td>
                <td> {{$task->user_id}} </td>
                <td> {{$task->status}} </td>
                <td>{{$task->created_at}} </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspn="6">No Tasks Found </td>
            </tr>
            @endif
        </tbody>
    </table>

</x-admin-layout>
