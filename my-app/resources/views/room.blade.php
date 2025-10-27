<form method="post" action='/room'>
    @csrf
    <label for="player_name">名前：</label>
    <input type="text" id="player_name" name="name" placeholder="名前を入力">
    <br><br>

    <label for="player_limit">参加人数：</label>
    <select id="player_limit" name="limit">
        <option value="3">3人</option>
        <option value="4">4人</option>
    </select>
    <br><br>

    このボタンが押されたらeventsが動くように
    <button type="submit" name="action" value="create">部屋作成</button>
    <button type="submit" name="action" value="join">部屋参加</button>
</form>
