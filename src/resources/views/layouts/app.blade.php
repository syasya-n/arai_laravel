<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'タスク管理')</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Arial, sans-serif;
            background: #f5f5f5;
            color: #333;
            max-width: 700px;
            margin: 40px auto;
            padding: 0 20px;
        }
        h1 {
            border-bottom: 2px solid #444;
            padding-bottom: 8px;
        }
        a {
            color: #2563eb;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .message {
            background: #dcfce7;
            border: 1px solid #16a34a;
            padding: 10px 14px;
            border-radius: 4px;
            margin-bottom: 16px;
        }
        .errors {
            background: #fee2e2;
            border: 1px solid #dc2626;
            padding: 10px 14px;
            border-radius: 4px;
            margin-bottom: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background: #eee;
        }
        .done {
            text-decoration: line-through;
            color: #999;
        }
        form.inline {
            display: inline;
        }
        .actions button {
            cursor: pointer;
        }
        input[type=text], textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 12px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 4px;
        }
        .btn {
            display: inline-block;
            padding: 6px 14px;
            background: #2563eb;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }
        .btn:hover {
            text-decoration: none;
            opacity: 0.9;
        }
        .btn.btn-small {
            padding: 4px 10px;
            font-size: 13px;
        }
        .btn.danger {
            background: #dc2626;
        }
    </style>
</head>
<body>
    <h1><a href="{{ route('tasks.index') }}">タスク管理アプリ</a></h1>

    @if (session('message'))
        <div class="message">{{ session('message') }}</div>
    @endif

    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</body>
</html>
