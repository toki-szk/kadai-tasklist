@if (count($tasks) > 0)
    <div class="list-unstyled">
         <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{!! nl2br(e($task->content)) !!}</td>
                    <td>{!! nl2br(e($task->status)) !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- ページネーションのリンク --}}
    {{ $tasks->links() }}
@endif