@extends('layouts.layout')

@section('content')
<div class="container mx-auto">

    <div x-data="solver">
        <div class="bg-white shadow p-4 mb-5">
            <div class="flex items-center w-100 justify-between">
                <h2 class="text-2xl font-light block">Scramble</h2>
                <button @click="newScramble" class="block bg-blue-600 text-white p-2 rounded ml-auto">Get scramble</button>
            </div>

            <div x-show="hasScramble">
                <div class="w-100">
                    <div class="text-2xl font-bold" x-text="scramble.join(' ')"></div>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 p-4 flex justify-center items-center mt-3 rounded h-[200px]" :class="classes.length ? 'bg-green-500 text-white' : ''" @keyup.window="handleTimer" @keydown.window="stopTimer">
            <p x-text="timerVal" class="pt-mono text-4xl"></p>
        </div>
    </div>
</div>
@endsection
