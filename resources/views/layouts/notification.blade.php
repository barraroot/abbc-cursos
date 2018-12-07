<div class="row">
    <div class="col-lg-offset-2 col-lg-8">
        @if(session('notification-success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
            </button>
            <span><b> Sucesso - </b> {{session('notification-success')}}</span>
        </div>
        @elseif(session('notification-error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
            </button>
            <span><b> Danger - </b> {{session('notification-error')}}</span>
        </div>
        @elseif(session('notification-info'))
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
            </button>
            <span><b> Info - </b> {{session('notification-info')}}</span>
        </div>
        @endif
    </div>
    <div class="col-lg-2"></div>
</div>