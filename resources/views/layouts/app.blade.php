 <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <dev class="site-title"><a href="{{ route('coffee_records.index') }}" class="site-title">コーヒーログ</a></div>
        <nav class="tab">
            <ul>
                @if(Auth::check())
                <li><a class="tab-item{{ Request::is('home') ? 'active' : ''}}" href="{{ route('home') }}">マイページ</a></li>
                <li><a class="tab-item{{ Request::is('coffee_records') ? 'active' : ''}}" href="{{ route('coffee_records.index') }}">記事検索</a></li>
                <li>
                    <form on-submit="return confirm('ログアウトしますか？')" action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">ログアウト</button>
                    </form>
                </li>
                @else
                <li><a href="{{ route('login') }}">ログイン</a></li>
                <li><a href="{{ route('register') }}">会員登録</a></li>
                @endif
            </ul>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>