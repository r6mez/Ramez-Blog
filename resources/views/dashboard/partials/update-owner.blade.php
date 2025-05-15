<section>
    <header>
        <h2 class="section-title">
            Owner
        </h2>

        <p class="section-description">
            Update your owners information.
        </p>
    </header>

    <form method="post" action="{{ route('owner.update') }}" class="section-form">
        @csrf
        @method('patch')

        <div class="form-group">
            <x-input-label for="name" value="Name" />
            <x-text-input id="name" name="name" type="text" :value="old('name', $owner->name)" required autofocus />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div class="form-group">
            <x-input-label for="about" value="About Owner" />
            <textarea id="about" name="about" required class="about-textarea">{{ old('about', $owner->about) }}</textarea>
            <x-input-error :messages="$errors->get('about')" />
        </div>

        <div class="form-actions">
            <x-primary-button>Save</x-primary-button>

            @if (session('status') === 'owner-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="success"
                >Saved.</p>
            @endif
        </div>
    </form>
</section>