<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte_Date</title>
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
</body>
<main>
    <table>
    <tr>
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩時間</th>
        <th>勤務時間</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>
        {{$user->name()}}
        </td>
    </tr>
    @endforeach
    </table>




    {{ $users->links() }}
</main>
</html>