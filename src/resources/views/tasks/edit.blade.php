@extends('layouts.app')

@section('title', 'タスク編集')

@section('content')
    <h2>タスク編集</h2>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title', $task->title) }}">

        <label for="description">詳細</label>
        <textarea id="description" name="description" rows="4">{{ old('description', $task->description) }}</textarea>

        <label>
            <input type="checkbox" name="is_done" value="1" @checked($task->is_done)>
            完了にする
        </label>
        <br><br>

        <button type="submit" class="btn">更新する</button>
        <a href="{{ route('tasks.index') }}">一覧に戻る</a>
    </form>
@endsection
