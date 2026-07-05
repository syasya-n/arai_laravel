@extends('layouts.app')

@section('title', 'タスク詳細')

@section('content')
    <h2>{{ $task->title }}</h2>

    <p>状態: {{ $task->is_done ? '完了' : '未完了' }}</p>
    <p>{{ $task->description ?: '詳細は登録されていません。' }}</p>

    <p>
        <a href="{{ route('tasks.edit', $task) }}" class="btn">編集する</a>
        <a href="{{ route('tasks.index') }}">一覧に戻る</a>
    </p>
@endsection
