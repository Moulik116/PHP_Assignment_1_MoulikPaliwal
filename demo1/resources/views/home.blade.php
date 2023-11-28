@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="fs-2 fw-medium">
        Home
    </div>
</div>
<div class="pb-4">
    <!-- Page Content-->
        This is my home page content
        <br>
        My name is {{$name}}
    <!-- END: Page Content-->
    
</div>
@endsection