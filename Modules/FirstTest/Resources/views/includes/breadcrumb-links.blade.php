<li class="breadcrumb-menu">
    <div class="btn-group" role="group" aria-label="Button group">
        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="breadcrumb-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('firsttest::menus.backend.firsttest.main') }}</a>

            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
                <a class="dropdown-item" href="{{ route('admin.firsttest.index') }}">{{ __('firsttest::menus.backend.firsttest.all') }}</a>
                @can('create firsttest')
                <a class="dropdown-item" href="{{ route('admin.firsttest.create') }}">{{ __('firsttest::menus.backend.firsttest.create') }}</a>
                @endcan
            </div>
        </div><!--dropdown-->

        <!--<a class="btn" href="#">Static Link</a>-->
    </div><!--btn-group-->
</li>