<div class="space-y-6">

    <div>
        <x-input-label for="matricule" :value="__('Matricule')"/>
        <x-text-input id="matricule" name="Matricule" type="text" class="mt-1 block w-full" :value="old('Matricule', $etudiant?->Matricule)" autocomplete="Matricule" placeholder="Matricule"/>
        <x-input-error class="mt-2" :messages="$errors->get('Matricule')"/>
    </div>
    <div>
        <x-input-label for="nom" :value="__('Nom')"/>
        <x-text-input id="nom" name="Nom" type="text" class="mt-1 block w-full" :value="old('Nom', $etudiant?->Nom)" autocomplete="Nom" placeholder="Nom"/>
        <x-input-error class="mt-2" :messages="$errors->get('Nom')"/>
    </div>
    <div>
        <x-input-label for="prenom" :value="__('Prenom')"/>
        <x-text-input id="prenom" name="Prenom" type="text" class="mt-1 block w-full" :value="old('Prenom', $etudiant?->Prenom)" autocomplete="Prenom" placeholder="Prenom"/>
        <x-input-error class="mt-2" :messages="$errors->get('Prenom')"/>
    </div>
    <div>
        <x-input-label for="sexe" :value="__('Sexe')"/>
        <x-text-input id="sexe" name="Sexe" type="text" class="mt-1 block w-full" :value="old('Sexe', $etudiant?->Sexe)" autocomplete="Sexe" placeholder="Sexe"/>
        <x-input-error class="mt-2" :messages="$errors->get('Sexe')"/>
    </div>
    <div>
        <x-input-label for="date_naissance" :value="__('Datenaissance')"/>
        <x-text-input id="date_naissance" name="DateNaissance" type="date" class="mt-1 block w-full" :value="old('DateNaissance', $etudiant?->DateNaissance)" autocomplete="DateNaissance" placeholder="Datenaissance"/>
        <x-input-error class="mt-2" :messages="$errors->get('DateNaissance')"/>
    </div>
    <div>
        <x-input-label for="adresse" :value="__('Adresse')"/>
        <x-text-input id="adresse" name="Adresse" type="text" class="mt-1 block w-full" :value="old('Adresse', $etudiant?->Adresse)" autocomplete="Adresse" placeholder="Adresse"/>
        <x-input-error class="mt-2" :messages="$errors->get('Adresse')"/>
    </div>
    <div>
        <x-input-label for="telephone" :value="__('Telephone')"/>
        <x-text-input id="telephone" name="Telephone" type="text" class="mt-1 block w-full" :value="old('Telephone', $etudiant?->Telephone)" autocomplete="Telephone" placeholder="Telephone"/>
        <x-input-error class="mt-2" :messages="$errors->get('Telephone')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="Email" type="text" class="mt-1 block w-full" :value="old('Email', $etudiant?->Email)" autocomplete="Email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('Email')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
