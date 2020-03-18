
<form action="/update/{{$user->id}}" method="post">
    @csrf
   name:<input    type="text"    name="name"     value="{{$user->name}}"><br/><br/>

    mail:    <input    type="text"    name="email"         value="{{$user->email}}"><br/><br/>



    <input type="submit">
</form>
