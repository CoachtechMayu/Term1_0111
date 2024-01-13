<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">Atte</a>
        </div>
        <nav>
            <ul class="header__list">
                <li class="header-item"><a href="">ホーム</a></li>
                <li class="header-item"><a href="">日付一覧</a></li>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <li class="header-item">
                        <button class="header-item__button">ログアウト</button>
                    </li>
                </form>
            </ul>
        </nav>
    </header>
<main>
    <div class="Attendance-management">
        <div class="user__name">
            @auth
            <h2 class= "user__name-h2">{{Auth::user()->name}}さんお疲れ様です！</h2>
            @endauth
        </div>
        <div class="attendance__btn">
            <!-- 勤務開始 -->
            <form action="{{ route('timestamp/time_in') }}" method="POST">
                @csrf
                <div class="time-on">
                    <button class="btn__time-on" type="submit">
                        勤務開始
                    </button>
                </div>
            </form>
            <!-- 勤務終了 -->
            <form action="{{ route('timestamp/time_out') }}" method="POST">
                @csrf
                <div class="time-off">
                    <button class="btn__time-off" type="submit">勤務終了</button>
                </div>
            </form>
        </div>
        <div class="rest__btn">
            <!-- 休憩開始 -->
            <form action="{{ route('rest/break_start') }}" method="POST">
                @csrf
                <div class="rest-start">
                    <button class="btn__rest-start" type="submit">休憩開始</button>
                </div>
            </form>
            <!-- 休憩終了 -->
            <form action="{{ route('rest/break_end') }}" method="POST">
                @csrf
                <div class="rest-stop">
                    <button class="btn__rest-stop" type="submit">休憩終了</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p class="footer__inner">Atte, inc</p>
    </footer>
</main>
</body>
</html>