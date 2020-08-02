<div>
    <form wire:submit.prevent="submit">
        <div class="grid grid-cols-6 gap-6">
            <x-text-input
                wire:model="name"
                label="Name"
                placeholder="Jeffrey Way"
                class="col-span-6 sm:col-span-3"/>

            <x-text-input
                wire:model="email"
                type="email"
                label="Email"
                placeholder="jeffrey@laracasts.com"
                class="col-span-6 sm:col-span-3"/>

            <div class="col-span-6 sm:col-span-2">
                <label for="department" class="block text-sm font-medium leading-5 text-gray-700">Department</label>
                <select wire:model="department"
                        id="department"
                        class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option value="Human Resources">Human Resources</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Information Technology">Information Technology</option>
                </select>
            </div>

            <x-text-input
                wire:model="title"
                label="Title"
                placeholder="Instructor"
                class="col-span-6 sm:col-span-3"/>

            <div class="col-span-6">
                <label class="block text-sm leading-5 font-medium text-gray-700 mb-2">
                    Photo
                </label>
                <div class="flex flex-items-center">
                    <div class="flex-shrink-0 h-10 w-10 mr-4">
                        @if($photo)
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full"
                                     src="{{$photo->temporaryUrl()}}"
                                     alt="">
                            </div>
                        @else
                            <svg class="h-10 w-10 text-gray-300 rounded-full" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        @endif
                    </div>
                    <div>
                        <input type="file" wire:model="photo">
                    </div>
                    @error('photo')
                    <div class="text-sm text-red-500 mt-2">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="col-span-6">
                <label class="block text-sm leading-5 font-medium text-gray-700 mb-2">
                    Application
                </label>
                <div class="flex flex-items-center">
                    <div>
                    @if($application)
                        <div class="flex-shrink-0 h-10 w-10 mr-4">
                            <x-document-icon />
                        </div>
                    @endif
                    </div>
                    <div wire:loading wire:target="application">
                        <x-loading class="mr-4" />
                    </div>
                    <div>
                        <input wire:model="application" type="file">
                    </div>
                </div>
                @error('application')
                <div class="text-sm text-red-500 mt-2">{{ $message }}</div> @enderror
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="status" class="block text-sm font-medium leading-5 text-gray-700">Status</label>
                <select wire:model="status"
                        id="status"
                        class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="col-span-6 sm:col-span-2">
                <label for="role" class="block text-sm font-medium leading-5 text-gray-700">Role</label>
                <select wire:model="role"
                        id="role"
                        class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="Member">Team Member</option>
                </select>
            </div>

            @if(session()->has('success'))
                {{session('success')}}
            @endif
        </div>

        <div class="mt-8 border-t border-gray-200 pt-5">
            <div class="flex justify-end">
                <div wire:loading wire:target="submit">
                    <x-loading class="mr-4" />
                </div>
                <span class="inline-flex rounded-md shadow-sm">
                    <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Add Team Member
                    </button>
                </span>
            </div>
        </div>
    </form>

</div>
