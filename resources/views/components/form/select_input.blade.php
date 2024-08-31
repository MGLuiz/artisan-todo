<div class="input-area">
    <label for={{$name}}>{{$label ?? null}}</label>
    <select name={{$name}} id={{$name}} {{$required? "required":null}}>

        <option selected disabled value="">Select a option</option>
        {{$slot}}

    </select>
</div>