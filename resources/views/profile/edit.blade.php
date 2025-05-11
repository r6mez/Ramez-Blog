<x-app-layout>
    <h2 class="header">Profile</h2>

    
    <div class="container">
        <div>
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>
    <br>
    <div class="container">
        <div style="margin-top:24px;">
            @include('profile.partials.update-password-form')
        </div>
    </div>
    <br>
</x-app-layout>
