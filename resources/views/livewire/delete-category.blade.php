<div>
    <a type="button" class="text-danger" data-bs-toggle="modal" data-bs-target="#delete-{{$category}}">
        <i class="fa-solid fa-trash"></i>
    </a>
    <div class="modal fade" id="delete-{{$category}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="delete-{{$category}}-Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-{{$category}}-Label">Eliminar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estas seguro que quieres eliminar esta categoria?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" wire:click='delete' data-bs-dismiss="modal">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>
