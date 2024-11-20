<div class="space-y-6">

    <div>
        <x-input-label for="montant" :value="__('Montant')"/>
        <x-text-input id="montant" name="Montant" type="text" class="mt-1 block w-full" :value="old('Montant', $pension?->Montant)" autocomplete="Montant" placeholder="Montant"/>
        <x-input-error class="mt-2" :messages="$errors->get('Montant')"/>
    </div>
    <div>
        <x-input-label for="montant_en_lettre" :value="__('Montantenlettre')"/>
        <x-text-input id="montant_en_lettre" name="MontantEnLettre" type="text" class="mt-1 block w-full" :value="old('Montant En Lettre', $pension?->MontantEnLettre)" autocomplete="MontantEnLettre" placeholder="Montantenlettre"/>
        <x-input-error class="mt-2" :messages="$errors->get('Montant En Lettre')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
