@extends('layouts.base')

@section('content')

<div class="container">
    <form class="max-w-sm mx-auto" action="{{ url(path: 'guides/' . $guide->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5 mx-auto">
            <label for="name" class="block mb-2 text-sm font-medium text-white" style="margin-top: 150px;">Nome do
                Guia:</label>
            <input type="text" name="name" id="name" value="{{ $guide->name }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-5 mx-auto">
            <label for="expertise" class="block mb-2 text-sm font-medium text-white" style="margin-top: 150px;">Experiência do
                Guia:</label>
            <input type="text" name="expertise" id="expertise" value="{{ $guide->expertise }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-5 mx-auto">
            <label for="email" class="block mb-2 text-sm font-medium text-white" style="margin-top: 150px;">Email do
                Guia:</label>
            <input type="text" name="email" id="email" value="{{ $guide->email }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <button type="submit"
            class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Editar
            Email</button>
    </form>
</div>

@endsection