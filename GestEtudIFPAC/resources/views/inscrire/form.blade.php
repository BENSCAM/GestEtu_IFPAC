<div class="space-y-6">
    
    <div>
        <x-input-label for="id__etudiant" :value="__('Id Etudiant')"/>
        <x-text-input id="id__etudiant" name="id_Etudiant" type="text" class="mt-1 block w-full" :value="old('id_Etudiant', $inscrire?->id_Etudiant)" autocomplete="id_Etudiant" placeholder="Id Etudiant"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_Etudiant')"/>
    </div>
    <div>
        <x-input-label for="id__filiere" :value="__('Id Filiere')"/>
        <x-text-input id="id__filiere" name="id_Filiere" type="text" class="mt-1 block w-full" :value="old('id_Filiere', $inscrire?->id_Filiere)" autocomplete="id_Filiere" placeholder="Id Filiere"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_Filiere')"/>
    </div>
    <div>
        <x-input-label for="annee_academique" :value="__('Anneeacademique')"/>
        <x-text-input id="annee_academique" name="anneeAcademique" type="text" class="mt-1 block w-full" :value="old('anneeAcademique', $inscrire?->anneeAcademique)" autocomplete="anneeAcademique" placeholder="Anneeacademique"/>
        <x-input-error class="mt-2" :messages="$errors->get('anneeAcademique')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>