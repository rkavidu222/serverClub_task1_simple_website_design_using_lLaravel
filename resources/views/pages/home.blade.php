@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center my-5">
    <h1 class="display-4 fw-bold">Welcome </h1>
    <p class="lead">Laravel Tutorial</p>
</div>

<div class="row mb-5 justify-content-center">
    <div class="col-md-10">
        <div class="p-4 bg-light rounded shadow-sm">
            <h2 class="mb-4 text-center text-primary">Why Laravel?</h2>
            <p class="fs-5 text-muted text-center">
                Laravel is a developer-friendly, elegant PHP framework designed to make building web applications simple, fast, and enjoyable.
                With expressive syntax and powerful tools, Laravel empowers you to build anything from simple blogs to large-scale enterprise platforms.
            </p>
        </div>
    </div>
</div>


<div class="container mb-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-code-slash fs-1 text-primary"></i>
                    <h5 class="card-title mt-3">Blade Templating</h5>
                    <p class="card-text text-muted">Create dynamic views easily with Laravel’s Blade engine, supporting reusable layouts and clean syntax.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-diagram-3 fs-1 text-success"></i>
                    <h5 class="card-title mt-3">MVC Architecture</h5>
                    <p class="card-text text-muted">Laravel follows the powerful Model-View-Controller pattern, keeping your code organized and testable.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-terminal fs-1 text-danger"></i>
                    <h5 class="card-title mt-3">Artisan CLI</h5>
                    <p class="card-text text-muted">Automate your workflow with Artisan – Laravel’s own command-line interface for tasks, scaffolding, and more.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
