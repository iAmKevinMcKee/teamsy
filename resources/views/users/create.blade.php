@extends('layouts.app')

@section('title', 'Create Team Member')

@section('content')

    <div class="mt-6 bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                <p class="mt-1 text-sm leading-5 text-gray-500">
                    Create a new team member.
                </p>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                    <div class="grid grid-cols-6 gap-6">
                        <x-text-input
                            wire:model="name"
                            label="Name"
                            :required="true"
                            placeholder="Jeffrey Way"
                            class="col-span-6 sm:col-span-3" />

                        <x-text-input
                            wire:model="email"
                            type="email"
                            label="Email"
                            :required="true"
                            placeholder="jeffrey@laracasts.com"
                            class="col-span-6 sm:col-span-3" />

                        <div class="col-span-6 sm:col-span-2">
                            <label for="department" class="block text-sm font-medium leading-5 text-gray-700">Department</label>
                            <select id="department" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                <option>Human Resources</option>
                                <option>Marketing</option>
                                <option>Information Technology</option>
                            </select>
                        </div>

                        <x-text-input
                            wire:model="title"
                            label="Title"
                            :required="true"
                            placeholder="Instructor"
                            class="col-span-6 sm:col-span-3" />


                        <div class="col-span-6">
                            <label class="block text-sm leading-5 font-medium text-gray-700">
                                Photo
                            </label>
                            <div class="mt-2 flex items-center">
                                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                                <span class="ml-5 rounded-md shadow-sm">
                                    <button type="button" class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                        Change
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="status" class="block text-sm font-medium leading-5 text-gray-700">Status</label>
                            <select id="status" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>


                    </div>

                    <div class="mt-8 border-t border-gray-200 pt-5">
                        <div class="flex justify-end">
                            <span class="inline-flex rounded-md shadow-sm">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                    Add Team Member
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
