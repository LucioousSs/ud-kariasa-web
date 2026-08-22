<div class="space-y-5">
    <div>
        <label for="name" class="mb-1.5 block text-sm font-medium text-slate-700">Nama Barang</label>
        <input type="text" name="name" id="name" value="{{ old('name', $product?->name) }}" required maxlength="255"
            class="w-full rounded-xl border border-slate-300 px-4 py-2.5 text-slate-800 placeholder-slate-400 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/30 @error('name') border-red-400 @enderror"
            placeholder="contoh: Beras Ramos 5kg">
        @error('name')
            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="category" class="mb-1.5 block text-sm font-medium text-slate-700">Kategori</label>
        <input type="text" name="category" id="category" value="{{ old('category', $product?->category) }}" required maxlength="100"
            list="category-list"
            class="w-full rounded-xl border border-slate-300 px-4 py-2.5 text-slate-800 placeholder-slate-400 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/30 @error('category') border-red-400 @enderror"
            placeholder="Sembako Pokok, Bumbu Dapur, dsb.">
        <datalist id="category-list">
            <option value="Sembako Pokok"></option>
            <option value="Bumbu Dapur"></option>
            <option value="Makanan Instan"></option>
            <option value="Minuman"></option>
        </datalist>
        @error('category')
            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid gap-5 sm:grid-cols-2">
        <div>
            <label for="price" class="mb-1.5 block text-sm font-medium text-slate-700">Harga (Rp)</label>
            <input type="number" name="price" id="price" value="{{ old('price', $product?->price) }}" required min="0" step="500"
                class="w-full rounded-xl border border-slate-300 px-4 py-2.5 text-slate-800 placeholder-slate-400 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/30 @error('price') border-red-400 @enderror"
                placeholder="0">
            @error('price')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="stock" class="mb-1.5 block text-sm font-medium text-slate-700">Stok</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock', $product?->stock) }}" required min="0" step="1"
                class="w-full rounded-xl border border-slate-300 px-4 py-2.5 text-slate-800 placeholder-slate-400 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/30 @error('stock') border-red-400 @enderror"
                placeholder="0">
            @error('stock')
                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div>
        <label for="image" class="mb-1.5 block text-sm font-medium text-slate-700">Foto Produk</label>
        <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/webp"
            class="w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-600 file:mr-3 file:cursor-pointer file:rounded-lg file:border-0 file:bg-brand file:px-4 file:py-2 file:text-sm file:font-medium file:text-white transition hover:file:bg-brand-dark">
        @error('image')
            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
        @enderror

        @if ($product?->image)
            <div class="mt-3 flex items-center gap-3">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Foto {{ $product->name }}" class="h-14 w-14 rounded-xl border border-slate-200 object-cover">
                <p class="text-xs text-slate-400">Foto saat ini — unggah foto baru untuk menggantinya.</p>
            </div>
        @else
            <p class="mt-2 text-xs text-slate-400">PNG, JPG, atau WebP — maks. 2MB. Kosongkan jika belum punya foto.</p>
        @endif
    </div>

    <div class="flex flex-wrap gap-3 pt-2">
        <button type="submit"
            class="inline-flex items-center justify-center rounded-xl bg-brand px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-brand/25 transition duration-300 hover:bg-brand-dark active:scale-95">
            {{ $submit }}
        </button>
        <a href="{{ route('admin.products.index') }}"
            class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-6 py-3 text-sm font-medium text-slate-700 transition duration-300 hover:bg-slate-50 active:scale-95">
            Batal
        </a>
    </div>
</div>