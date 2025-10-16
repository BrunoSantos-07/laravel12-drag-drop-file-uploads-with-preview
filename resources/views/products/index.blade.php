@extends('layouts.app');

@section('content')
    <div class="py-4">
        <div class="mb-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold">Product List</h1>

            {{-- Button to create product --}}
            <button class="flex cursor-pointer items-center rounded bg-purple-600 px-4 py-2 text-white hover:bg-purple-700">
                <i data-lucide="plus-circle" class="mr-1 h-4 w-4"></i>
                Add Product
            </button>
        </div>
    </div>
@endsection
