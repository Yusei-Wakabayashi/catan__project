参加可能部屋一覧
テスト
<h2>参加可能な部屋</h2>

@foreach ($players as $player)
    <form method="POST" action="{{ url('/join') }}">
        @csrf
        <p>部屋名：{{ $player->name }}</p>
        <p>部屋ID：{{ $player->boards_id }}</p>
        <p>人数：{{ $player->boards_id }}</p>

        {{-- 必要に応じて隠しフィールドでIDを送る --}}
        <input type="hidden" name="boards_id" value="{{ $player->boards_id }}">
        <input type="hidden" name="name" value="{{ $player->name }}">

        このボタンが押されたらeventsが動くように
        <button type="submit">この部屋に参加</button>
    </form>
    <hr>
@endforeach
