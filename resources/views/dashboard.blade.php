@extends('layouts.layout')

@section('content')
<div class="w-full bg-blue-400 py-10 mb-5">
    <div class="container mx-auto text-white">
        <h1 class="text-4xl font-bold mb-3">Dashboard</h1>
        <h3 class="text-xl italic font-light">Track your progress.</h3>
    </div>
</div>
<main class="container mx-auto" x-data="dashboard">
    <div>
        <div class="bg-blue-400 rounded p-2 shadow text-white text-center mb-3 cursor-pointer" @click="onClick">
            Start training
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @include('partials/dash-card', ['icon' => 'fa-solid fa-gauge-simple-high', 'title' => 'Fastest solve', 'value' => $fastest_solve])
        @include('partials/dash-card', ['icon' => 'fa-solid fa-arrow-up-wide-short', 'title' => 'Solves today', 'value' => $solves_today])
        @include('partials/dash-card', ['icon' => 'fa-solid fa-fire', 'title' => 'Streak', 'value' => $streak])
    </div>
</main>

<div class="overflow-y-auto overflow-x-hidden fixed top-50 right-0 left-0 z-50 justify-center items-center bg-black bg-opacity-50 w-full md:inset-0 h-[calc(100%-1rem)] max-h-full flex items-center content-center">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow p-3 flex flex-col items-center content-center">
            <h3 class="text-2xl font-light text-center">Start training</h3>
            <p class="text-center font-light mb-3">
                Choose cube and start your training.
            </p>
            <select class="bg-white shadow rounded p-2 min-w-52 border-gray-400 mb-3">
                <option>3x3</option>
            </select>
            <div class="flex">
                <button class="p-2 bg-red-700 text-white rounded w-24">Cancel</button>
                <button class="p-2 bg-blue-500 text-white rounded ms-2 w-24">Start</button>
            </div>
        </div>
    </div>
</div>
@endsection
