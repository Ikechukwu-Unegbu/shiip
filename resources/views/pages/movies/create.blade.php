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
                      <form action="/dashboard/movies/store" method="post">
                        @csrf
                        <h2>New Movie</h2>
                        @include('partials._message')
                        <input name="title" type="text" placeholder="Movie Title Here">

                        <input type="text" name="showtime" placeholder="Movie Date and Time Here">
                        <select name="location" >
                          <option value="">Ikeja</option>
                          <option value="">Festac</option>
                          <option value="">Aja</option>
                        </select>
                        <div>
                        <input type="text" name="poster" placeholder="Movie Poster Link Here">
                        <small>Please use image link from a CDN source like UNSPLASH.COM. Had to do it this way since I was racing against time.</small>
                        </div>
                        <textarea  name="description" id="" cols="30" rows="10" placeholder="Movie Description here."></textarea>
                        <button class="button">
                          Add New Movie Show
                        </button>
                       </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
