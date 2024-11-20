<div class="space-y-6">
    
    <div>
        <x-input-label for="montant" :value="__('Montant')"/>
        <x-text-input id="montant" name="montant" type="text" class="mt-1 block w-full" :value="old('montant', $paiement?->montant)" autocomplete="montant" placeholder="Montant"/>
        <x-input-error class="mt-2" :messages="$errors->get('montant')"/>
    </div>
    <div>
        <x-input-label for="date_paiement" :value="__('Date Paiement')"/>
        <x-text-input id="date_paiement" name="date_paiement" type="text" class="mt-1 block w-full" :value="old('date_paiement', $paiement?->date_paiement)" autocomplete="date_paiement" placeholder="Date Paiement"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_paiement')"/>
    </div>
    <div>
        <x-input-label for="id__mode_paiement" :value="__('Id Modepaiement')"/>
        <x-text-input id="id__mode_paiement" name="id_ModePaiement" type="text" class="mt-1 block w-full" :value="old('id_ModePaiement', $paiement?->id_ModePaiement)" autocomplete="id_ModePaiement" placeholder="Id Modepaiement"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_ModePaiement')"/>
    </div>
    <div>
        <x-input-label for="id__etudiant" :value="__('Id Etudiant')"/>
        <x-text-input id="id__etudiant" name="id_Etudiant" type="text" class="mt-1 block w-full" :value="old('id_Etudiant', $paiement?->id_Etudiant)" autocomplete="id_Etudiant" placeholder="Id Etudiant"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_Etudiant')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>