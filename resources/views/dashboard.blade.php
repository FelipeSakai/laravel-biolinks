<div>

    <h1>DashBoard</h1>

    @foreach($links as $link)
        <li>
            <a href="/links/{{$link->id}}">{{$link->name}}</a>
        </li>
    @endforeach
</div>
