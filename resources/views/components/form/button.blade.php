<div class="input-area">
    <button type={{$type ?? "submit"}} 
            class="btn btn-submit {{$type == "submit" ? "btn-primary" : ""}}">
            {{$slot}}
    </button>
</div>