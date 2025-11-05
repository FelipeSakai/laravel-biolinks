<div>

    <h1>DashBoard</h1>

    @if ($message = session()->get('messagem'))
        <div>{{$message}}</div>
    @endif
    <a href="{{route('links.create')}}">Criar</a>

    <br>
    <br>

    @foreach($links as $link)
        <li>
            <a href="{{route('links.edit',$link)}}">{{$link->name}}</a>
            <form action="{{route('links.destroy',$link)}}" method="post" onsubmit="confirm('Tem certeza ?')">
                @csrf
                @method('DELETE')

                <button>Deletar</button>
            </form>
        </li>
    @endforeach
</div>
