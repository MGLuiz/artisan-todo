<div class="task">
    <div class="title">
        <input type="checkbox" name="" id="" 
            @if ($data && $data['done']) checked @endif
        />
        <span class="task-title">{{$data['title'] ?? null}}</span>
    </div>
    <div class="category">
        <div class="sphere"></div>
        <span class="category-label">{{$data['category_id'] ?? null}}</span>
    </div>
    <div class="actions" style="cursor: pointer">
        <a href="{{route('task.edit')}}">
            <img src="/assets/icons/icon-edit.png" alt="Click to edit task">
        </a>
        <a href="{{route('task.delete')}}">
            <img src="/assets/icons/icon-delete.png" alt="Click to exclude task">
        </a>
    </div>
</div> <!-- task -->
