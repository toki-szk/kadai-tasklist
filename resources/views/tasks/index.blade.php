@extends('layouts.app')

@section('content')

<h1>タスク一覧</h1>

@if (count($tasks) > 0)
<table class="table table-striped">
  <thead>
    <tr>
      <th>id</th>
      <th>メッセージ</th>
      <th>ステータス</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($tasks as $task)
    <tr>
      <td>{{ $task->id }}</td>
      <td>{{ $task->content }}</td>
      <td>{{ $task->status }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@foreach ($tasks as $task)
    <div class="row">
        {{-- メッセージ詳細ページへのリンク --}}
        <div>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</div>
        <div>{{ $task->content }}</div>
    </div>
    @endforeach
@endif

{{-- メッセージ作成ページへのリンク --}}
{!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}

{{-- メッセージ編集ページへのリンク --}}
{!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}


@endsection