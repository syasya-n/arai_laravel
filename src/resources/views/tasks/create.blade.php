@extends('layouts.app')

@section('title', 'タスク新規作成')

@section('content')
    <h2>タスク新規作成</h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">

        <label for="description">詳細</label>
        <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>

        <button type="submit" class="btn">登録する</button>
        <a href="{{ route('tasks.index') }}">一覧に戻る</a>
    </form>
@endsection
