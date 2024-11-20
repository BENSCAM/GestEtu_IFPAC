<div class="space-y-6">
    
    <div>
        <x-input-label for="nom" :value="__('Nom')"/>
        <x-text-input id="nom" name="nom" type="text" class="mt-1 block w-full" :value="old('nom', $filiere?->nom)" autocomplete="nom" placeholder="Nom"/>
        <x-input-error class="mt-2" :messages="$errors->get('nom')"/>
    </div>
    <div>
        <x-input-label for="description" :value="__('Description')"/>
        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $filiere?->description)" autocomplete="description" placeholder="Description"/>
        <x-input-error class="mt-2" :messages="$errors->get('description')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>