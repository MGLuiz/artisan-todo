<div class="input-area">
    <label for={{$name}}>{{$label ?? null}}</label>
    <input type={{$type ?? "text"}} name={{$name}} placeholder="{{$placeholder ?? null}}" 
    {{$required? "required":null}} >
</div>