<x-filament-panels::page>
    <form wire:submit="save">
        {{ $this->form }}
        <div class="mt-6">
            <x-filament::button type="submit" form="save">
                Simpan Perubahan
            </x-filament::button>
        </div>
    </form>
</x-filament-panels::page>