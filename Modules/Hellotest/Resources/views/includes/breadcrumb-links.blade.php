<li class="breadcrumb-menu">
    <div class="btn-group" role="group" aria-label="Button group">
        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="breadcrumb-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('hellotest::menus.backend.hellotest.main') }}</a>

            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
                <a class="dropdown-item" href="{{ route('admin.hellotest.index') }}">{{ __('hellotest::menus.backend.hellotest.all') }}</a>
                @can('create hellotest')
                <a class="dropdown-item" href="{{ route('admin.hellotest.create') }}">{{ __('hellotest::menus.backend.hellotest.create') }}</a>
                @endcan
            </div>
        </div><!--dropdown-->

        <!--<a class="btn" href="#">Static Link</a>-->
    </div><!--btn-group-->
</li>