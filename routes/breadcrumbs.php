<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Trang chủ', route('tjc.home'));
});

// Home > Blog
//Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
//    $trail->parent('home');
//    $trail->push('Blog', route('blog'));
//});

// Home > Blog > [Category]
//Breadcrumbs::for('jewelry', function (BreadcrumbTrail $trail, $category, $subCategory) {
//    $trail->parent('tjc.home');
//    $trail->push($category, route('tjc.jewelry', $category));
//    $trail->push($subCategory->title, route('tjc.jewelry.subCategory', $subCategory));
//});

Breadcrumbs::for('jewelry', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('home');
    $trail->push('Trang sức', route('tjc.jewelry', $category));
});

Breadcrumbs::for('jewelry.subCategory', function (BreadcrumbTrail $trail, $category, $subCategory) {
    $trail->parent('jewelry', $category);
    $trail->push('Nhẫn', route('tjc.jewelry.subCategory', ['category' => $category, 'subCategory' => $subCategory]));
});

// promotion
Breadcrumbs::for('promotion', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Khuyến mãi', route('tjc.promotion'));
});

