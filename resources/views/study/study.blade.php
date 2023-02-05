@extends('layouts.main')
@section('title', 'title')

@section('content')
    <div class="page-content">
        <livewire:study-component />
        <br>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="1000">
            <div class="toast-header">
                <strong class="me-auto">Thông báo cực căng</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('answerQuestion-studyConponent-event', event => {
            const toastLiveExample = document.getElementById('liveToast');
            const toast = new bootstrap.Toast(toastLiveExample);
            const toastBody =  document.getElementById('toast-body');
            toastBody.innerHTML = event.detail.message;
            toast.show();
        });
    </script>
@endsection
