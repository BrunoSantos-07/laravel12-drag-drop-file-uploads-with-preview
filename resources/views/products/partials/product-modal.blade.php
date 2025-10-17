<div x-show="isModalOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">

    <div class="w-full max-w-2xl rounded-lg bg-gray-500 p-8 shadow-xl">

        <h2 class="mb-6 text-2xl font-bold text-gray-100">Create Product</h2>

        {{-- Form --}}

        <form>
            {{-- Product name --}}
            <div class="mb-3">
                <label for="name" class="mb-1 block text-sm font-medium text-gray-100">Name</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Product Name"
                    class="w-full rounded border border-gray-600 bg-gray-100 px-3 py-2 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-purple-500"
                />
            </div>

            {{-- price and status --}}
            <div class="mb-3 grid grid-cols-1 gap-3 md:grid-cols-2">
                {{-- Price --}}
                <div>
                    <label for="price" class="mb-1 block text-sm font-medium text-gray-100">Price</label>

                    <input
                        type="text"
                        id="price"
                        name="price"
                        placeholder="Product Price"
                        class="w-full rounded border border-gray-600 bg-gray-100 px-3 py-2 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-purple-500"
                    />
                </div>

                {{-- Status --}}

                <div>
                    <label for="status" class="mb-1 block text-sm font-medium text-gray-100">Status</label>

                    <select
                        name="status"
                        id="status"
                        class="w-full rounded border border-gray-600 bg-gray-100 px-3 py-2 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-purple-500"
                    >
                        <option selected disabled value="">Select</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

            </div>

            {{-- Description --}}
            <div class="mb-3">
                <label for="description" class="mb-1 block text-sm font-medium text-gray-100">Description</label>

                <textarea
                    name="description"
                    id="description"
                    placeholder="Description..."
                    class="w-full rounded border border-gray-600 bg-gray-100 px-3 py-2 text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-purple-500"
                ></textarea>
            </div>

            {{-- Image upload --}}
            <div>
                <label class="mb-1 block text-sm font-medium text-gray-100">Featured Image</label>

                <div class="w-full cursor-pointer rounded-lg border-2 border-dashed border-purple-400 bg-gray-50 px-5 py-20 text-center transition hover:bg-gray-100">
                    <input type="file" name="images[]" multiple accept="image/*" />

                    <p class="flex items-center justify-center font-semibold text-purple-600">
                        <i data-lucide="upload" class="mr-2"></i>Click or Drag Image to Upload
                    </p>

                    <p class="mt-1.5 text-xs text-gray-500">You can select multiple images.</p>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="flex justify-end space-x-3 pt-4">
                <button @click="closeModal()" type="button" class="cursor-pointer rounded bg-gray-300 px-6 py-2 text-black shadow hover:bg-gray-400">Cancel</button>
                <button type="button" class="cursor-pointer rounded bg-purple-700 px-6 py-2 text-white shadow transition hover:bg-gray-400">Save</button>
            </div>
        </form>
    </div>
</div>
