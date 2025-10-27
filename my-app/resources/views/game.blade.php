お待ちください
<h2>現在の部屋人数</h2>

@foreach ($boardslimits as $boardslimit)
    <form method="POST" action="{{ url('/wait') }}">
        @csrf
        <p>部屋ID：{{ $boardslimit->id }}</p>
        <p>現在の人数：<span id="count-{{ $boardslimit->id }}">
            {{ \App\Models\Playerinformation::where('boards_id', $boardslimit->id)->count() }}
        </span>人</p>
        <p>最大人数：{{ $boardslimit->limit }}</p>
    </form>
    <hr>
@endforeach


<script src="https://cdn.jsdelivr.net/npm/laravel-echo/dist/echo.iife.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pusher-js"></script>
<script>
    const echo = new Echo({
        broadcaster: 'reverb',
        host: window.location.hostname + ':6001' // Reverbのポート
    });

    const boardIds = @json($boardslimits->pluck('id'));

    boardIds.forEach(boards_id => {
        echo.channel(`room.${boards_id}`)
            .listen('RoomPlayerCountUpdated', (e) => {
                const countElement = document.getElementById(`count-${e.boards_id}`);
                if (countElement) {
                    countElement.textContent = e.count;
                }
            });
    });
</script>