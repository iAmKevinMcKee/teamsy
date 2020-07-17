@extends('layouts.app')

@section('title', 'Create Team Member')

@section('content')

    <div class="mt-6 bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                <p class="mt-1 pr-3 text-sm leading-5 text-gray-500">
                    The more the merrier! Create a new team member.
                </p>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <livewire:add-user />
            </div>
        </div>
    </div>

@endsection
