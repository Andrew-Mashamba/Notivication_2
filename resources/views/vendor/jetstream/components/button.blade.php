<button style="background-color: #F36F23" {{ $attributes->merge(['type' => 'submit', 'class' => ' p-2 rounded-lg btn bg-black hover:bg-red-500 text-white whitespace-nowrap']) }}>
    {{ $slot }}
</button>
