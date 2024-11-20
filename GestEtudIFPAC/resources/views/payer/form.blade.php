<div class="space-y-6">
    
    <div>
        <x-input-label for="id__etudiant" :value="__('Id Etudiant')"/>
        <x-text-input id="id__etudiant" name="id_Etudiant" type="text" class="mt-1 block w-full" :value="old('id_Etudiant', $payer?->id_Etudiant)" autocomplete="id_Etudiant" placeholder="Id Etudiant"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_Etudiant')"/>
    </div>
    <div>
        <x-input-label for="id__pension" :value="__('Id Pension')"/>
        <x-text-input id="id__pension" name="id_Pension" type="text" class="mt-1 block w-full" :value="old('id_Pension', $payer?->id_Pension)" autocomplete="id_Pension" placeholder="Id Pension"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_Pension')"/>
    </div>
    <div>
        <x-input-label for="id__campus" :value="__('Id Campus')"/>
        <x-text-input id="id__campus" name="id_Campus" type="text" class="mt-1 block w-full" :value="old('id_Campus', $payer?->id_Campus)" autocomplete="id_Campus" placeholder="Id Campus"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_Campus')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>