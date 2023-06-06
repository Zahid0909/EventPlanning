<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reserve Event X') }}
        </h2>
    </x-slot>

    <div class="px-4 py-8">
        <div class="container mx-auto">

            <form class="bg-white p-10 rounded">
                <div class="space-y-12">
                  <div class="border-b border-gray-900/10 pb-12">
                    <center><h1 class="text-base font-semibold leading-7 text-gray-900">Reservation Details</h1></center>

                  <div class="flex items-center justify-center p-12">
                    <!-- Author: FormBold Team -->
                    <!-- Learn More: https://formbold.com -->
                    <div class="mx-auto w-full max-w-[550px]">
                      <form action="https://formbold.com/s/FORM_ID" method="POST">
                        <div class="-mx-3 flex flex-wrap">
                          <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                              <label
                                for="fName"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                              >
                                First Name
                              </label>
                              <input
                                type="text"
                                name="fName"
                                id="fName"
                                placeholder="First Name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                              />
                            </div>
                          </div>
                          <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                              <label
                                for="lName"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                              >
                                Last Name
                              </label>
                              <input
                                type="text"
                                name="lName"
                                id="lName"
                                placeholder="Last Name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                              />
                            </div>
                          </div>
                        </div>

                        <div class="mb-5">
                            <label
                              for="guest"
                              class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                              Number of Tickets
                            </label>
                            <input
                              type="number"
                              name="tickets"
                              id="ticket"
                              placeholder="5"
                              min="0"
                              class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                          </div>

                        <div class="-mx-3 flex flex-wrap">
                          <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                              <label
                                for="date"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                              >
                                Date
                              </label>
                              <input
                                type="date"
                                name="date"
                                id="date"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                              />
                            </div>
                          </div>
                          <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                              <label
                                for="time"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                              >
                                Time
                              </label>
                              <input
                                type="time"
                                name="time"
                                id="time"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="mb-5">
                            <label
                              for="email
                              class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                              Email
                            </label>
                            <input
                              type="text"
                              name="email"
                              id="email"
                              placeholder="user@gmail.com"
                              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                            <div class="mb-5">
                                <label
                                  for="country"
                                  class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                  Country
                                </label>
                                <input
                                  type="text"
                                  name="country"
                                  id="country"
                                  placeholder="Sri Lanka"
                                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>
                            <div class="mb-5">
                                <label
                                  for="streetAddress"
                                  class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                  Street Address
                                </label>
                                <input
                                  type="text"
                                  name="streetAddress"
                                  id="streetAddress"
                                  placeholder="No. 123, Galle Road, Colombo 03"
                                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>
                            <div class="mb-5">
                                <label
                                  for="city"
                                  class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                  City
                                </label>
                                <input
                                  type="text"
                                  name="city"
                                  id="city"
                                  placeholder="Colombo 03"
                                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>
                            <div class="mb-5">
                                <label
                                  for="state"
                                  class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                State/Province
                                </label>
                                <input
                                  type="text"
                                  name="state"
                                  id="state"
                                  placeholder="Western Province"
                                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>
                            <div class="mb-5">
                                <label
                                  for="zip_code"
                                  class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                ZIP/Postal Code
                                </label>
                                <input
                                  type="text"
                                  name="zip_code"
                                  id="zip_code"
                                  placeholder="00300"
                                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>
                            <br>
                            <center><h1 class="text-base font-semibold leading-7 text-gray-900">Payment Information</h1></center>
                            <br>
                            <div class="mb-5">
                                <label
                                  for="cardNumber"
                                  class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                Card Number
                                </label>
                                <input
                                  type="text"
                                  name="cardNumber"
                                  id="cardNumber"
                                  placeholder="1234 1234 1234 1234"
                                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>
                            <div class="mb-5">
                                <label
                                  for="expiryDate"
                                  class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                  Expiry Date
                                </label>
                                <input
                                  type="text"
                                  name="expireDate"
                                  id="expireDate"
                                  placeholder="MM/YY"
                                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                />
                            </div>
                            <div class="mb-5">
                                <label
                                  for="cvc"
                                  class="mb-3 block text-base font-medium text-[#07074D]"
                                >
                                  CVC
                                </label>
                                <input
                                  type="text"
                                  name="cvc"
                                  id="cvc"
                                  placeholder="123"
                                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                />
                            </div>



                        <div class="mt-6 flex items-center justify-end gap-x-10">
                            <a href="javascript:history.back()" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button></a>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Reserve</button>
                        </div>
                      </form>
                    </div>
                  </div>
              </form>

        </div>
      </div>
</x-app-layout>
