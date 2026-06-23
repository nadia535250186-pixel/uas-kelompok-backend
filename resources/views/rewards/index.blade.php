<h1>Daftar Reward</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@foreach($rewards as $reward)
    <h3>{{ $reward->nama_reward }}</h3>
    <p>Point: {{ $reward->point_required }}</p>

    <form action="/redeem" method="POST">
        @csrf

        <input type="text" name="user_name" placeholder="Nama">

        <input type="hidden" name="reward_id" value="{{ $reward->id }}">

        <button type="submit">Redeem</button>
     </form>

     <hr>
@endforeach