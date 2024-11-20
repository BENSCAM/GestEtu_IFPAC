<div class="space-y-6">
    
    <div>
        <x-input-label for="nom_mode" :value="__('Nom Mode')"/>
        <x-text-input id="nom_mode" name="nom_mode" type="text" class="mt-1 block w-full" :value="old('nom_mode', $modePaiement?->nom_mode)" autocomplete="nom_mode" placeholder="Nom Mode"/>
        <x-input-error class="mt-2" :messages="$errors->get('nom_mode')"/>
    </div>
    <div>
        <x-input-label for="reference" :value="__('Reference')"/>
        <x-text-input id="reference" name="reference" type="text" class="mt-1 block w-full" :value="old('reference', $modePaiement?->reference)" autocomplete="reference" placeholder="Reference"/>
        <x-input-error class="mt-2" :messages="$errors->get('reference')"/>
    </div>
    <div>
        <x-input-label for="montant" :value="__('Montant')"/>
        <x-text-input id="montant" name="montant" type="text" class="mt-1 block w-full" :value="old('montant', $modePaiement?->montant)" autocomplete="montant" placeholder="Montant"/>
        <x-input-error class="mt-2" :messages="$errors->get('montant')"/>
    </div>
    <div>
        <x-input-label for="etudiant_id" :value="__('Etudiant Id')"/>
        <x-text-input id="etudiant_id" name="etudiant_id" type="text" class="mt-1 block w-full" :value="old('etudiant_id', $modePaiement?->etudiant_id)" autocomplete="etudiant_id" placeholder="Etudiant Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('etudiant_id')"/>
    </div>
    <div>
        <x-input-label for="date_paiement" :value="__('Date Paiement')"/>
        <x-text-input id="date_paiement" name="date_paiement" type="text" class="mt-1 block w-full" :value="old('date_paiement', $modePaiement?->date_paiement)" autocomplete="date_paiement" placeholder="Date Paiement"/>
        <x-input-error class="mt-2" :messages="$errors->get('date_paiement')"/>
    </div>
    <div>
        <x-input-label for="description" :value="__('Description')"/>
        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $modePaiement?->description)" autocomplete="description" placeholder="Description"/>
        <x-input-error class="mt-2" :messages="$errors->get('description')"/>
    </div>
    <div>
        <x-input-label for="devise" :value="__('Devise')"/>
        <x-text-input id="devise" name="devise" type="text" class="mt-1 block w-full" :value="old('devise', $modePaiement?->devise)" autocomplete="devise" placeholder="Devise"/>
        <x-input-error class="mt-2" :messages="$errors->get('devise')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>