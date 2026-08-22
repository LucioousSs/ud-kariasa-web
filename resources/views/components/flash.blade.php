@if (session('success'))
    <div class="mb-4 flex items-center justify-between gap-3 rounded-2xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
        <span>{{ session('success') }}</span>
        <button type="button" class="text-green-500 hover:text-green-700 transition" onclick="this.parentElement.remove()">&times;</button>
    </div>
@endif

@if (session('error'))
    <div class="mb-4 flex items-center justify-between gap-3 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
        <span>{{ session('error') }}</span>
        <button type="button" class="text-red-400 hover:text-red-700 transition" onclick="this.parentElement.remove()">&times;</button>
    </div>
@endif