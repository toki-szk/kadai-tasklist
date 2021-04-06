@extends('layouts.app')

@section('content')

<div class="center jumbotron">
    <div class="text-center">
        <h1>Welcome to the タスク管理</h1>
        {{-- ユーザ登録ページへのリンク --}}
        {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
    </div>
</div>

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
      <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
      <td>{{ $task->content }}</td>
      <td>{{ $task->status }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif

{{-- メッセージ作成ページへのリンク --}}
{!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}


@endsection