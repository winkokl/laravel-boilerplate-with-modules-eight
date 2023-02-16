<?php

Breadcrumbs::for('admin.secondtest.index', function ($trail) {
    $trail->push(__('secondtest::labels.backend.secondtest.management'), route('admin.secondtest.index'));
});

Breadcrumbs::for('admin.secondtest.create', function ($trail) {
    $trail->parent('admin.secondtest.index');
    $trail->push(__('secondtest::labels.backend.secondtest.create'), route('admin.secondtest.create'));
});

Breadcrumbs::for('admin.secondtest.show', function ($trail, $id) {
    $trail->parent('admin.secondtest.index');
    $trail->push(__('secondtest::labels.backend.secondtest.show'), route('admin.secondtest.show', $id));
});

Breadcrumbs::for('admin.secondtest.edit', function ($trail, $id) {
    $trail->parent('admin.secondtest.index');
    $trail->push(__('secondtest::labels.backend.secondtest.edit'), route('admin.secondtest.edit', $id));
});
