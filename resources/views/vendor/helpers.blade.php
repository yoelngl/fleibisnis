@if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}","{{ trans('message.success')}}");
@endif
@if(Session::has('info'))
    toastr.info("{{ Session::get('info') }}","{{ trans('message.information')}}");
@endif
@if(Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}","{{ trans('message.warning') }}");
@endif
@if(Session::has('failed'))
    toastr.error("{{ Session::get('failed') }}","{{ trans('message.failed') }}");
@endif
