@props(['idSignature', 'signatureShow'])
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.signature.css') }}">
@endpush
<div class="form-group required mb-3">
    <label class="control-label">Signature:</label>
    <br />
    {{-- <div id="sig" style="border-style: dashed;"></div> --}}
    <div id="{{ $idSignature }}" style="border-style: dashed;"></div>
    <br /><br />
    <button id="clear{{$idSignature}}" class="btn btn-danger btn-sm">Clear</button>
    <span id="show{{$signatureShow}}"></span>
    <textarea id="{{ $signatureShow }}" name="signature" style="display: none"></textarea>
</div>
@push('scripts')
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.signature.min.js') }}"></script>
@endpush
