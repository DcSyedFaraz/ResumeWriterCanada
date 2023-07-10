@if (session('success') )
    <div class="mt-3 bg-primary-one border-t-4 border-primary-two rounded text-teal-900 shadow-md" role="alert">
        <div class="py-2">
            <p class="text-center text-white font-bold">{{ session('success') }}</p>
        </div>
    </div>
@endif
