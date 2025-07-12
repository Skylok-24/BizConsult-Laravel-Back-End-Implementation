<form action="{{ $href }}" class="d-inline" method="POST"
    id="deleteForm-{{ $id }}">
    @csrf
    @method('DELETE')
    <button class=" btn btn-danger" type="button" onclick="confirmDelete({{ $id }})">
        <i class="fe fe-trash-2"></i>
    </button>
</form>
