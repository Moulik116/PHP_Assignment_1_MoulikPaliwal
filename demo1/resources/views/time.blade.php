<div>
    <h1> Current time is {{$time}}</h1>
    <h2>
        Good
    @if($time>=3 && $time < 12)
        Morning
    @elseif($time>=12 && $time<16)
        Afternoon
    @elseif($time>=16 && $time <20)
        Evening
    @elseif($time>=20 && $time<3)
        Night
    @endif
</div>