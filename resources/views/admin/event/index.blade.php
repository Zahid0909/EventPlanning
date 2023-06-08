<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex justify-center mr-5 mt-8 mb-5">
                    <a href="{{ route('admin.events.create') }}"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-2">Create New
                        Event</a>
                </div>

                <x-table class="flex justify-start">
                    <x-slot name="head">
                        <x-th>Image</x-th>
                        <x-th>Event Name</x-th>
                        <x-th>Category</x-th>
                        <x-th>Venue</x-th>
                        <x-th>Address</x-th>
                        <x-th>Date</x-th>
                        <x-th>Time</x-th>
                        <x-th>Price Per Ticket</x-th>
                        <x-th></x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($events as $event)
                            <x-tr>
                                <x-td>
                                    @if ($event->hasMedia('image'))
                                    <img src="{{ $event->getFirstMediaUrl('image') }}" alt="{{ $event->event_name }}"/>
                                    @else
                                        -
                                    @endif
                                </x-td>
                                <x-td>{{ $event->event_name }}</x-table.cell>
                                <x-td>{{ $event->category_id}}</x-td>
                                <x-td>{{ $event->venue }}</x-td>
                                <x-td>{{ $event->address }}</x-td>
                                <x-td>{{ $event->date }}</x-td>
                                <x-td>{{ $event->time }}</x-td>
                                <x-td>{{ $event->price_per_ticket }}</x-td>
                                <x-td>
                                    <div class="flex">
                                        <a href="{{ route('admin.events.edit', $event->id) }}"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-24 mr-2"><center>Edit</center></a>
                                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-24">Delete</button>
                                        </form>
                                    </div>
                                </x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>
