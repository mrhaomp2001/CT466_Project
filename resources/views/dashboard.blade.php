@extends('layouts.main')
@section('title', 'title')

@section('content')
    <x-slot name="header">
        <h2
            class="font-semibold text-xl text-gray-800 text-light leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 item">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-dark">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
@endsection
