@extends('twitter.dm-button')

@section('hasil')
    <hr class="mx-3">
    {{-- <p class="text-center">DM Button Link: <span id="result"><strong>{{ $link }}</strong></span> --}}
        <input type="text" class="form-control" value="{{ $link }}" id="result" readonly>
    </p>
    <p class="text-center">
        <button type="button" onclick="myFunction()" class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard"
                viewBox="0 0 16 16">
                <path
                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                <path
                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
            </svg>
            Copy link
        </button>
    </p>
    <p>Twitter ID: <strong>{{ $hasil->data->id }}</strong></p>
    <p>Username: <strong>{{ $hasil->data->username }}</strong></p>
@endsection

@push('js')
    <script>
        function myFunction() {
            var copyText = document.getElementById("result");
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            navigator.clipboard.writeText(copyText.value);
            alert("Copied the link: " + copyText.value);
        }
    </script>
@endpush
