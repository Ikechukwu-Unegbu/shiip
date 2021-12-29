<style>
  form{
    display: flex;
    flex-direction: column;
    grid-gap: 1rem;
    width: 60%;
  }

  .button{
    background-color: grey;
    padding: 0.5rem;
    color: white;
    font-weight: bold;
    font-size: large;
  }
  
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <main>
                      <form action="/dashboard/location/store" method="post">
                        @csrf
                        <h2>Create New Location</h2>
                        @include('partials._message')
                        <input name="name" type="text" placeholder="Add Location Name e.g Ikeja">

                        <input type="text" name="address" placeholder="Add exact address here">
  
                        <button class="button">
                          Add New Location
                        </button>
                       </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
