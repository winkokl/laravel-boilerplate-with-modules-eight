@extends ('backend.layouts.app')

@section ('title', __('firsttest::labels.backend.firsttest.management'))

@section('breadcrumb-links')
    @include('firsttest::includes.breadcrumb-links')
@endsection

@push('after-styles')

@endpush

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('firsttest::labels.backend.firsttest.management') }}
                    <small class="text-muted">{{ __('firsttest::labels.backend.firsttest.show') }}</small>
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
                    <strong>{{ __('firsttest::labels.backend.firsttest.table.created') }}:</strong> {{ $firsttest->updated_at->timezone(get_user_timezone()) }} ({{ $firsttest->created_at->diffForHumans() }}),
                    <strong>{{ __('firsttest::labels.backend.firsttest.table.last_updated') }}:</strong> {{ $firsttest->created_at->timezone(get_user_timezone()) }} ({{ $firsttest->updated_at->diffForHumans() }})
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