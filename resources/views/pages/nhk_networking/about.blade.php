@extends("app")

@section('content')


<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam, possimus dolorum. A maiores corporis veniam cupiditate aspernatur rerum, mollitia nostrum error quas. Rerum, et a iure est cum dolore excepturi!</p>

@endsection
@push('js')
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }} "></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush