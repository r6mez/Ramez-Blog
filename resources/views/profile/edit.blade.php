<x-app-layout>
    <div class="container">
        <h2 class="header">Profile</h2>
        <div>
            @include('profile.partials.update-profile-information-form')
        </div>
        <div style="margin-top:24px;">
            @include('profile.partials.update-password-form')
        </div>
        <div style="margin-top:24px;">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
