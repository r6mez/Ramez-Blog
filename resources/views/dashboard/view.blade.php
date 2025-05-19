<x-app-layout>
    <div class="container">
        @include('dashboard.partials.update-owner')
    </div>
    <div class="container">
        @include('dashboard.partials.add-social')
    </div>
    <div class="container">
        @include('dashboard.partials.view-socials', ['socials' => $socials])
    </div>
</x-app-layout>
