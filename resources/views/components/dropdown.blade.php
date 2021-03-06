<div x-data="{ open: false }" @click.away="open = false">

    <div @click="open = !open">
        {{ $trigger }}
    </div>

    {{--Links--}}
    <div x-show="open" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52" style="display: none;">
        {{ $slot }}
    </div>
</div>
