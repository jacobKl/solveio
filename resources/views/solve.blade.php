@extends('layouts.layout')

@section('content')
<div class="bg-white rounded p-4">

    <div x-data="solver">
        <div x-show="hasScramble">
            <div class="grid grid-cols-10 gap-3 w-100 mb-5">
                <template x-for="scrambling in scramble">
                        <div class="bg-white rounded p-3 text-lg font-bold shadow flex justify-center align-middle" x-text="scrambling"></div>
                </template>
            </div>
        </div>
        <div class="flex justify-center">
            <button @click="newScramble" class="bg-blue-600 text-white p-3 rounded">Get scramble</button>
        </div>

        <div class="bg-gray-100 p-4 flex justify-center align-middle mt-3 rounded" @keyup.window="handleTimer" @keydown.window="stopTimer">
            <p x-text="timerVal" class="pt-mono"></p>
        </div>
    </div>
</div>
@endsection
