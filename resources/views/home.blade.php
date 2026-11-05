<h1>
    Welcome to the home page 
</h1>
<p>
    Ola {{ $name }}
</p>
<p>
    Seus habitos são:
</p>
<ul>
    @foreach($habits as $item)
    <li>{{ $item }}</li>
    @endforeach
</ul>

