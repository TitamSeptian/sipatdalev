@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show text-left px-4"" role="alert">
        <strong>
            <h4>Sukses!</h4>
        </strong><br>
        {!! session('success') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(session('warning'))
    <div class="alert alert-warning alert-dismissible fade show text-left px-4"" role="alert">
        <strong>
            <h4>Terjadi Kesalahan !!</h4>
        </strong><br>
        {{ session('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
