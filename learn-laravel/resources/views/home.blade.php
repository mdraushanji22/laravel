<div>
    <!-- Well begun is half done. - Aristotle -->
    @include('common.header')
    <h2>This is Raushan bhai</h2>
    @include('common.inner',['page'=>"This is Home Page"])


    {{-- IF CONDITION --}}
    @if($users[0] == 'Raushan')
    <h2>This is Raushan</h2>
    @elseif($users[0] == 'jilani')
    <h2>This is Jilani</h2>
    @else
    <h2>Other users</h2>
    @endif

    {{-- LINKS --}}
    <a href="/">Welcome Page</a>
    <a href="/about/Raushan">About Page</a>
    <a href="/contact">Contact me</a>
</div>

{{-- FOREACH LOOP --}}
<div>
    @foreach($users as $user)
    <h4>{{ $user }}</h4>
    @endforeach
</div>

{{-- FOR LOOP --}}
<div>
    @for($i = 0; $i <= 10; $i++)
        <h3>{{ $i }}</h3>
        @endfor
</div>