@extends('layouts.app')

@section('content')
@if (!Auth::check())
<div class="center jumbotron">
    <div class="text-center">
        <h1>Welcome to the タスク管理</h1>
        {{-- ユーザ登録ページへのリンク --}}
        {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
    </div>
</div>
@else
<h1>タスク一覧</h1>

@include('tasks.tasks')

{{-- メッセージ作成ページへのリンク --}}
{!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}
@endif

@endsection