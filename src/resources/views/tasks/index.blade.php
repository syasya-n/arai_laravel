@extends('layouts.app')

@section('title', 'タスク一覧')

@section('content')
    <p><a href="{{ route('tasks.create') }}" class="btn">＋ 新規タスク作成</a></p>

    <table>
        <thead>
            <tr>
                <th>状態</th>
                <th>タイトル</th>
                <th>作成日時</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->is_done ? '完了' : '未完了' }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task) }}" class="{{ $task->is_done ? 'done' : '' }}">
                            {{ $task->title }}
                        </a>
                    </td>
                    <td>{{ $task->created_at->format('Y-m-d H:i') }}</td>
                    <td class="actions">
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-small">編集</a>
                        <form class="inline" action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('削除しますか？');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-small danger">削除</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">タスクはまだ登録されていません。</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
