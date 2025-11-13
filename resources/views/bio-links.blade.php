<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
<div>
    <img src="/storage/{{$user->photo}}" alt="Photo Profile">
    <h1>User</h1>
    <h2>User {{$user->name}} :: {{$user->id}}</h2>
    <h3>{{$user->description}}</h3>

    <br>
    <ul>
        @foreach($user->links as $link)
            <li>
                <a href="{{$link->link}}" target="_blank">
                    {{$link->id}}, {{$link->name}}
                </a>

            </li>
        @endforeach
    </ul>
</div>
