<div>
    <!-- Creating a flash session for displaying our success/error message in the home view -->
    @if(session()->has('success_message'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Success!</strong> {{session()->get('success_message')}}
        </div>
    @elseif(session()->has('error_message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Oops!</strong> {{session()->get('error_message')}}
        </div>
    @endif
</div>

