@extends ('backend.layouts.app')

@section ('title', appName() . ' | ' . __('secondtest::labels.backend.secondtest.management'))

@section('breadcrumb-links')
    @include('secondtest::includes.breadcrumb-links')
@endsection

@push('after-styles')
    {{ style("https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css") }}
    {{ style('assets/plugins/sweetalert2/sweetalert2.min.css') }}
@endpush

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('secondtest::labels.backend.secondtest.management') }} <small class="text-muted">{{ __('secondtest::labels.backend.secondtest.list') }}</small>
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
                @include('secondtest::includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="secondtest-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>{{ __('secondtest::labels.backend.secondtest.table.id') }}</th>
                            <th>{{ __('secondtest::labels.backend.secondtest.table.last_updated') }}</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection

@push('after-scripts')
    {{ script("https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js") }}
    <!-- {{ script("js/backend/plugin/datatables/dataTables-extend.js") }} -->
    {{ script('assets/plugins/sweetalert2/sweetalert2.all.min.js')}}

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#secondtest-table').DataTable({
                serverSide: true,
                ajax: {
                    url: '{!! route("admin.secondtest.get") !!}',
                    type: 'post',
                    error: function (xhr, err) {
                        if (err === 'parsererror')
                            location.reload();
                        else swal(xhr.responseJSON.message);
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                fnDrawCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                    //load_plugins();
                }
            });
        });
    </script>
@endpush