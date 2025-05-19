<section>
    <header>
        <h2 class="section-title">
            Social Links
        </h2>
    </header>

    <ul class="social-list">
        @forelse($socials as $social)
            <li class="social-item card" style="display: flex; align-items: center; justify-content: space-between;">
                <div class="social-data" style="display: flex; align-items: center; gap: 16px;">
                    <a href="{{ $social->link }}" target="_blank" class="home-social-link">
                        <img src="{{ asset('storage/' . $social->icon) }}" class="home-social-icon" alt="{{ $social->name }}"/>
                    </a>
                    <div class="social-name-link" style="display: flex; flex-direction: column;">
                        <span class="social-name">{{ $social->name }}</span>
                        <a href="{{ $social->link }}" target="_blank" class="social-link">{{ $social->link }}</a>
                    </div>
                </div>
                <form method="POST" action="{{ route('social.delete', $social->id) }}" class="delete-form" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <x-delete-button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this social link?')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M1 7h22M8 7V5a2 2 0 012-2h2a2 2 0 012 2v2" />
                    </x-delete-button>
                </form>
            </li>
        @empty
            <li>No social links found.</li>
        @endforelse
    </ul>
</section>
