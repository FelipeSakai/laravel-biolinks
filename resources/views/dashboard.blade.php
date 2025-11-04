<div>

    <h1>DashBoard</h1>

    @if ($message = session()->get('messagem'))
        <div>{{$message}}</div>
    @endif

    @foreach($links as $link)
        <li>
            <a href="{{route('links.edit',$link)}}">{{$link->name}}</a>
        </li>
    @endforeach
</div>
