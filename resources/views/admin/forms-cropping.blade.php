@extends('admin.layout.master')
@section('styles')
    <link rel="stylesheet" href="../assets/vendor/cropper/cropper.min.css">
@endsection

@section('scripts')

    <!-- Image cropper JavaScript -->
    <script src="../assets/vendor/cropper/cropper.min.js"></script>
    <script src="../assets/vendor/cropper/cropper-init.js"></script>
@endsection

@section('content')

    <!-- Show the cropped image in modal -->
    <div class="modal docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="getCroppedCanvasModal">برش خورده</h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">بستن</button>
                    <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.html">دانلود</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->

@endsection
