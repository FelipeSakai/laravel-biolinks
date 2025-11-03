<div>
    <h1>Criar um link</h1>

    @if($message = session()->get('message'))
        <div>{{$message}}</div>
    @endif

    <form action="{{route('links.create') }}" method="post">
        @csrf

        <br>

        <div>
            <input name="link" placeholder="Link" value="{{ old('link') }}"/>
            @error('link')
            <span>{{$message}}</span>
            @enderror
        </div>

        <br>

        <div>
            <input name="name" placeholder="Name" value="{{ old('name') }}"/>
            @error('name')
            <span>{{$message}}</span>
            @enderror
        </div>


        <br>

        <button>Salvar</button>
    </form>
</div>
