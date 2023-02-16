<?php

Breadcrumbs::for('admin.hellotest.index', function ($trail) {
    $trail->push(__('hellotest::labels.backend.hellotest.management'), route('admin.hellotest.index'));
});

Breadcrumbs::for('admin.hellotest.create', function ($trail) {
    $trail->parent('admin.hellotest.index');
    $trail->push(__('hellotest::labels.backend.hellotest.create'), route('admin.hellotest.create'));
});

Breadcrumbs::for('admin.hellotest.show', function ($trail, $id) {
    $trail->parent('admin.hellotest.index');
    $trail->push(__('hellotest::labels.backend.hellotest.show'), route('admin.hellotest.show', $id));
});

Breadcrumbs::for('admin.hellotest.edit', function ($trail, $id) {
    $trail->parent('admin.hellotest.index');
    $trail->push(__('hellotest::labels.backend.hellotest.edit'), route('admin.hellotest.edit', $id));
});
