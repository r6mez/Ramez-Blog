<section>
    <header>
        <h2 class="section-title">
            Add Social
        </h2>
    </header>

    <form method="post" action="{{ route('social.add') }}" class="section-form" enctype="multipart/form-data">
        @csrf
        @method('post') 

        <div class="form-group">
            <x-input-label for="name" value="Name" />
            <x-text-input id="name" name="name" type="text" required autofocus />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div class="form-group">
            <x-input-label for="link" value="Link" />
            <x-text-input id="link" name="link" type="text" required autofocus />
            <x-input-error :messages="$errors->get('link')" />
        </div>

        <div class="form-group">
            <x-input-label for="icon" value="Icon" />
            <div class="image-input-wrapper">
                <label for="icon" class="image-input-label" id="icon-label">
                    <span id="icon-label-text">Choose file...</span>
                </label>
                <input id="icon" name="icon" type="file" accept="image/*" required class="image-input" onchange="document.getElementById('icon-label-text').textContent = this.files[0]?.name || 'Choose file...';" />
            </div>
            <x-input-error :messages="$errors->get('icon')" />
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