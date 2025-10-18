@extends('layouts.app');

@section('content')
    <div x-data="productManager()" class="py-4">
        <div class="mb-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold">Product List</h1>

            {{-- Button to create product --}}
            <button @click="openModal('create')"
                class="flex cursor-pointer items-center rounded bg-purple-600 px-4 py-2 text-white hover:bg-purple-700">
                <i data-lucide="plus-circle" class="mr-1 h-4 w-4"></i>
                Add Product
            </button>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto rounded bg-white shadow-md">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="border-b border-gray-800 bg-gray-800 text-left text-gray-100">
                        <th class="px-4 py-2 font-semibold">#</th>
                        <th class="px-4 py-2 font-semibold">Name</th>
                        <th class="px-4 py-2 font-semibold">SKU</th>
                        <th class="flex items-center px-4 py-2 font-semibold">Price <i data-lucide="indian-rupee" class="ml-1 h-4 w-4"></i></th>
                        <th class="px-4 py-2 font-semibold">Status</th>
                        <th class="px-4 py-2 font-semibold">Featured Image</th>
                        <th class="px-4 py-2 font-semibold">Action</th>
                    </tr>
                </thead>

                {{-- Tbody --}}
                <tbody>
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-2"></td>
                        <td class="px-4 py-2"></td>
                        <td class="px-4 py-2"></td>
                        <td class="px-4 py-2"></td>
                        <td class="px-4 py-2"></td>
                        <td class="px-4 py-2"></td>
                        <td class="px-4 py-2"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Include product modal --}}
        @include('products.partials.product-modal')
    </div>
@endsection

@push('scripts')
    <script>
        function productManager() {
            return {

                // Alpine state
                isModalOpen: false,
                mode: 'create',
                modalTitle: 'Create Product',
                form: productManager.defaultForm(),
                imagePreviews: [],
                errors: [],

                // open modal
                openModal(type) {
                    this.isModalOpen = true;
                },

                // close modal
                closeModal() {
                    this.isModalOpen = false;
                },

                // Handle image
                handleImage(event) {
                    const files = Array.from(event.target.files);

                    this.processFilesHandling(files);
                },

                // Handle drop
                handleDrop(event) {
                    const files = Array.from(event.dataTransfer.files);

                    // File handling
                    this.processFilesHandling(files);

                    // Attaching dropped files to the actual file input
                    const dataTransfer = new DataTransfer();
                    files.forEach(file => dataTransfer.items.add(file));
                    this.$refs.fileInput.files = dataTransfer.files;
                },

                processFilesHandling(files) {
                    files.forEach(file => {
                        if (files.type.startsWith('image/')) {
                            this.form.images.push(file);
                            this.imagePreviews.push({
                                url: URL.createObjectURL(file),
                                type: 'new',
                                file
                            });
                        } else {
                            this.errors.push(`${file.name} is not a valid image file.`);
                        }
                    })
                }
            }
        }

        // Reusable state
        productManager.defaultForm = function() {
            return {
                name: '',
                price: '',
                status: '',
                description: '',
                images: [],
                existingImages: []
            };
        }
    </script>
@endpush
