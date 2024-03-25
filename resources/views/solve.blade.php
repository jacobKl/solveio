@extends('layouts.layout')

@section('content')
<div class="container mx-auto" x-data="solver">

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
        @empty($training['cube_id'])
            <div class="overflow-y-auto overflow-x-hidden fixed top-50 right-0 left-0 z-50 justify-center items-center bg-black bg-opacity-50 w-full md:inset-0 h-[calc(100%-1rem)] max-h-full flex items-center content-center">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow p-3 flex flex-col items-center content-center">
                        <h3 class="text-2xl font-light text-center">Start training</h3>
                        <p class="text-center font-light mb-3">
                            Choose cube and start your training.
                        </p>
                        <select class="bg-white shadow rounded p-2 min-w-52 border-gray-400 mb-3" x-model="chosenCube">
                            <option value="">Choose cube</option>
                            @foreach($cubes as $cube)
                                <option value="{{ $cube['id'] }}">{{ $cube['cube_type'] }}</option>
                            @endforeach
                        </select>
                        <div class="flex">
                            <template x-if="chosenCube">
                                <button class="p-2 bg-blue-500 text-white rounded ms-2 w-24" @click="chooseCube">Start</button>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        @endempty
</div>
@endsection
