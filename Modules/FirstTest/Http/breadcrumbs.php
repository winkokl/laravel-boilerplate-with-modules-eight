<?php

Breadcrumbs::for('admin.firsttest.index', function ($trail) {
    $trail->push(__('firsttest::labels.backend.firsttest.management'), route('admin.firsttest.index'));
});

Breadcrumbs::for('admin.firsttest.create', function ($trail) {
    $trail->parent('admin.firsttest.index');
    $trail->push(__('firsttest::labels.backend.firsttest.create'), route('admin.firsttest.create'));
});

Breadcrumbs::for('admin.firsttest.show', function ($trail, $id) {
    $trail->parent('admin.firsttest.index');
    $trail->push(__('firsttest::labels.backend.firsttest.show'), route('admin.firsttest.show', $id));
});

Breadcrumbs::for('admin.firsttest.edit', function ($trail, $id) {
    $trail->parent('admin.firsttest.index');
    $trail->push(__('firsttest::labels.backend.firsttest.edit'), route('admin.firsttest.edit', $id));
});
