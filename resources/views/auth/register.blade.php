<x-layout>
    <x-page-heading>Register</x-page-heading>
    <x-forms.form method="post" action='/register' enctype="multipart/form-data">
        <x-forms.input label="Name" name="name"/>
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Passwrod" name="password" type="password"/>
        <x-forms.input label="Passwrod Confiramtion" name="password_confirmation" type="password"/>
        <x-forms.divider/>
        <x-forms.input label="Employer Name" name="employer"/>
        <x-forms.input label="Employer Logo" name="logo" type="file"/>

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
