{{-- {{$todos}} --}}
@error('title')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
@foreach ($todos as $todo)
<p>{{$todo->id.".". $todo->title}}    
<form method="POST" action="todo/{{$todo->id}}">
    {{ csrf_field() }}
    {{method_field('DELETE')}}
    <input type="submit" value="Delete">

</form>
</p>
@endforeach

<form method="POST" action="/todo">
    {{ csrf_field() }}
    <input type="text" placeholder="請輸入東西" name="title">
    <input type="submit">

</form>