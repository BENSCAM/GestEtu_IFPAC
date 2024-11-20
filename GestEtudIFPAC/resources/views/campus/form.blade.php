<div class="space-y-6">
    
    <div>
        <x-input-label for="nom" :value="__('Nom')"/>
        <x-text-input id="nom" name="nom" type="text" class="mt-1 block w-full" :value="old('nom', $campus?->nom)" autocomplete="nom" placeholder="Nom"/>
        <x-input-error class="mt-2" :messages="$errors->get('nom')"/>
    </div>
    <div>
        <x-input-label for="adresse" :value="__('Adresse')"/>
        <x-text-input id="adresse" name="adresse" type="text" class="mt-1 block w-full" :value="old('adresse', $campus?->adresse)" autocomplete="adresse" placeholder="Adresse"/>
        <x-input-error class="mt-2" :messages="$errors->get('adresse')"/>
    </div>
    <div>
        <x-input-label for="ville" :value="__('Ville')"/>
        <x-text-input id="ville" name="ville" type="text" class="mt-1 block w-full" :value="old('ville', $campus?->ville)" autocomplete="ville" placeholder="Ville"/>
        <x-input-error class="mt-2" :messages="$errors->get('ville')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>