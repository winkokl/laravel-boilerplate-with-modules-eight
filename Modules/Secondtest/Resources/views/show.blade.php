@extends ('backend.layouts.app')

@section ('title', __('secondtest::labels.backend.secondtest.management'))

@section('breadcrumb-links')
    @include('secondtest::includes.breadcrumb-links')
@endsection

@push('after-styles')

@endpush

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('secondtest::labels.backend.secondtest.management') }}
                    <small class="text-muted">{{ __('secondtest::labels.backend.secondtest.show') }}</small>
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
                    <strong>{{ __('secondtest::labels.backend.secondtest.table.created') }}:</strong> {{ $secondtest->updated_at->timezone(get_user_timezone()) }} ({{ $secondtest->created_at->diffForHumans() }}),
                    <strong>{{ __('secondtest::labels.backend.secondtest.table.last_updated') }}:</strong> {{ $secondtest->created_at->timezone(get_user_timezone()) }} ({{ $secondtest->updated_at->diffForHumans() }})
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