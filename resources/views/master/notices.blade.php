@if(Session::has('flashSuccess'))
    <div class="alert alert-success fade in flash_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>{{ Session::get('flashSuccess') }}</strong>
    </div>
@endif

@if(Session::has('flashError'))
    <div class="alert alert-danger fade in flash_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>{{ Session::get('flashError') }}</strong>
    </div>
@endif
@if(Session::has('exists'))
    <div class="alert alert-danger fade in flash_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>{{ Session::get('exists') }}</strong>
    </div>
@endif
@if(Session::has('email'))
    <div class="alert alert-danger fade in flash_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>{{ Session::get('email') }}</strong>
    </div>
@endif
@if(Session::has('confirmed'))
    <div class="alert alert-danger fade in flash_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>{{ Session::get('confirmed') }}</strong>
    </div>
@endif
@if(Session::has('status'))
    <div class="alert alert-success fade in flash_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>{{ Session::get('status') }}</strong>
    </div>
@endif
@if(Session::has('request_success'))
    <div class="alert alert-success fade in flash_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>{{ Session::get('request_success') }}</strong>
    </div>
@endif
@if(Session::has('wrong_code'))
    <div class="alert alert-danger fade in flash_message">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>{{ Session::get('wrong_code') }}</strong>
    </div>
@endif
@if(Session::has('approve'))
    <div class="alert alert-success fade in flash_message" style="position:fixed">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>{{ Session::get('approve') }}</strong>
    </div>
@endif
@if(Session::has('disapprove'))
    <div class="alert alert-danger fade in flash_message" style="position:fixed">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>{{ Session::get('disapprove') }}</strong>
    </div>
@endif
