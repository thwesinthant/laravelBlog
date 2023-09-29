<div>
    <h1 {{ $attributes->merge(['class' => 'text-center']) }}>{{ $message }}</h1>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <h1>{{ $message }} {{ $hello }}</h1>
    {{ $slot }}
</div>
