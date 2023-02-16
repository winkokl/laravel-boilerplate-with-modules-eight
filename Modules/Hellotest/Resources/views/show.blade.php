@extends ('backend.layouts.app')

@section ('title', __('hellotest::labels.backend.hellotest.management'))

@section('breadcrumb-links')
    @include('hellotest::includes.breadcrumb-links')
@endsection

@push('after-styles')

@endpush

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('hellotest::labels.backend.hellotest.management') }}
                    <small class="text-muted">{{ __('hellotest::labels.backend.hellotest.show') }}</small>
                </h4>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4 mb-4">
            <div class="col">
                
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    <strong>{{ __('hellotest::labels.backend.hellotest.table.created') }}:</strong> {{ $hellotest->updated_at->timezone(get_user_timezone()) }} ({{ $hellotest->created_at->diffForHumans() }}),
                    <strong>{{ __('hellotest::labels.backend.hellotest.table.last_updated') }}:</strong> {{ $hellotest->created_at->timezone(get_user_timezone()) }} ({{ $hellotest->updated_at->diffForHumans() }})
                </small>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-footer-->
</div><!--card-->
@endsection

@push('after-scripts')

<script>


</script>
@endpush