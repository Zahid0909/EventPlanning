<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Butter Cup Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
          <div class="flex flex-col w-full bg-white rounded shadow-lg sm:w-6/4 md:w-3/2 lg:w-6/5">
            <div class="w-full h-90 bg-top bg-cover rounded-t">
                <img src="https://th.bing.com/th/id/R.f10a43e665a6028ac2b0fb9b68aef0cd?rik=0PvHtvQTB1QBqA&riu=http%3a%2f%2fwww.tourismsaskatchewan.com%2f-%2fmedia%2fthings-to-do%2fevents%2fsasktel-centre-concert-events.ashx&ehk=iCldjfMI5HjnilU3Jo%2fI%2brWR6k45upM0RmThXL8%2fWPc%3d&risl=&pid=ImgRaw&r=0" alt="Image" class="w-full h-full object-cover">
              </div>
            <div class="flex flex-col w-full md:flex-row border-b">
              <div class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
                <div class="md:date-3xl">{{ $event->date }}</div>
                <div class="md:time-xl">{{ $event->time }}</div>
              </div>
              <div class="p-4 font-normal text-gray-800 md:w-3/4">
                <br><br><br>
                <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">{{ $event->event_name }}</h1>
                <div class="flex flex-row items-center mt-4 text-gray-700">
                    <br>
                </div>
              </div>
            </div>
            <div class="p-6 border-b">
                <h2 class="text-2xl ">
                    Information
                </h2>
                <p class="text-sm text-gray-500">
                    Event details.
                    </p>
            </div>
            <div>
            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Event Name
                </p>
                <p>
                    {{ $event->event_name }}
                </p>
            </div>
            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Venue
                </p>
                <p>
                    {{ $event->venue }}
                </p>
            </div>

            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Address
                </p>

                    {{ $event->address }}
                </p>
            </div>
            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Category
                </p>
                <p>
                    {{ $event->category }}
                </p>
            </div>
            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Description
                </p>
                <p>
                    {{ $event->description }}
                </p>
            </div>
            <div
                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Price per Ticket
                </p>
                <p>
                    {{ $event->price_per_ticket }}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 pt-6 border-b">
                <p class="text-gray-600">
                    Reserve Event
                <p>
                    <a href="{{ route('event.reservation', 1) }}">
                        <button class="w-full rounded-md bg-indigo-600 py-2 text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">Reserve</button>
                    </a>
                </p>
            </div>

            <div class="bg-white">
                <div class="px-6 pt-6">
                    <h2 class="text-lg font-medium leading-7 text-gray-900">Reviews</h2>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Event reviews</p>
                    <div class="mt-6 space-y-10 divide-y divide-gray-200 border-b border-t border-gray-200 pb-10">
                        <div class="pt-10 lg:grid lg:grid-cols-12 lg:gap-x-8">
                            <div
                                class="lg:col-span-8 lg:col-start-5 xl:col-span-9 xl:col-start-4 xl:grid xl:grid-cols-3 xl:items-start xl:gap-x-8">
                                <div class="flex items-center xl:col-span-1">
                                    <div class="flex items-center">
                                        <!-- Active: "text-yellow-400", Inactive: "text-gray-200" -->
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <p class="ml-3 text-sm text-gray-700">5<span class="sr-only"> out of 5 stars</span>
                                    </p>
                                </div>

                                <div class="mt-4 lg:mt-6 xl:col-span-2 xl:mt-0">
                                    <h3 class="text-sm font-medium text-gray-900">Can&#039;t say enough good things</h3>

                                    <div class="mt-3 space-y-6 text-sm text-gray-500">
                                        <p>I recently had the opportunity to attend "Ignite Your Potential: Unleashing the Power Within,"
                                            and I must say, it was an absolute delight from start to finish. The festival,
                                            held at a sprawling outdoor venue, promised an immersive musical experience,
                                            and it truly delivered on its promise.</p>
                                        <p>Upon entering the festival grounds, I was immediately struck by the vibrant atmosphere.
                                            Colorful lights adorned the stages and pathways, creating a visually captivating setting.
                                            The organizers had done an excellent job of transforming the space into a music lover's paradise.</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="mt-6 flex items-center text-sm lg:col-span-4 lg:col-start-1 lg:row-start-1 lg:mt-0 lg:flex-col lg:items-start xl:col-span-3">
                                <p class="font-medium text-gray-900">Risako M</p>
                                <time datetime="2021-01-06"
                                    class="ml-4 border-l border-gray-200 pl-4 text-gray-500 lg:ml-0 lg:mt-2 lg:border-0 lg:pl-0">May
                                    16, 2021</time>
                            </div>
                        </div>
                    </div>
                    <div class="pt-8 pd-8" >
                        <h3 class="text-lg font-medium leading-7 text-gray-900">Post A Review</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Write about your experince.</p>
                        <form action="#" class="relative bg-white pt-4">
                            <div
                                class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                                <label for="title" class="sr-only">Title</label>
                                <input type="text" name="title" id="title"
                                    class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0"
                                    placeholder="Title">
                                <label for="description" class="sr-only">Description</label>
                                <textarea rows="2" name="description" id="description"
                                    class="block w-full resize-none border-0 py-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Write a description..."></textarea>

                                <!-- Spacer element to match the height of the toolbar -->
                                <div aria-hidden="true">
                                    <div class="py-2">
                                        <div class="h-9"></div>
                                    </div>
                                    <div class="h-px"></div>
                                    <div class="py-2">
                                        <div class="py-px">
                                            <div class="h-9"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="flex  space-x-3 border-t border-gray-200 py-2 pt-8 pb-8">
                                <div class="flex-shrink-0">
                                    <button type="submit"
                                        class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
          </div>
        </div>
      </div>







</x-app-layout>
