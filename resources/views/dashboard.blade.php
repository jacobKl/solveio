@extends('layouts.layout')

@section('content')
<div class="w-full bg-blue-400 py-10 mb-5">
    <div class="container mx-auto text-white">
        <h1 class="text-4xl font-bold mb-3">Dashboard</h1>
        <h3 class="text-xl italic font-light">Track your progress.</h3>
    </div>
</div>
<main class="container mx-auto" x-data="dashboard">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @include('partials/dash-card', ['icon' => 'fa-solid fa-gauge-simple-high', 'title' => 'Fastest solve', 'value' => $fastest_solve])
        @include('partials/dash-card', ['icon' => 'fa-solid fa-arrow-up-wide-short', 'title' => 'Solves today', 'value' => $solves_today])
        @include('partials/dash-card', ['icon' => 'fa-solid fa-fire', 'title' => 'Streak', 'value' => $streak])
    </div>
</main>
@endsection
