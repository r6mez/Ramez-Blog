<button {{ $attributes->merge(['type' => 'submit', 'class' => 'delete-button']) }}>
    {{ $slot }}
</button>
