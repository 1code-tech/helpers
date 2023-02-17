@if(session('flash.message'))
    <div class="alert alert-{{ session('flash.type', 'success') }} rounded-0 border-0 text-center position-relative">
        {{ session('flash.message') }}

        <div class="position-absolute top-0 end-0 mt-3 me-3">
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert"></button>
        </div>
    </div>
@endif
