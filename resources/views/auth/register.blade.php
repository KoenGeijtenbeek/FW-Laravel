<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label for="firstname">First Name</x-form-label> 
                    <div class="mt-2">
                        <x-form-input id="firstname" name="firstname" required />

                        <x-form-error name='firstname'/>
                    </div>
                </x-form-field>
            

                
                <x-form-field>
                    <x-form-label for="lastname">Last Name</x-form-label> 
                    <div class="mt-2">
                        <x-form-input id="lastname" name="lastname" required />

                        <x-form-error name='lastname'/>
                    </div>
                </x-form-field>



                <x-form-field>
                    <x-form-label for="email">Email</x-form-label> 
                    <div class="mt-2">
                        <x-form-input id="email" name="email" type="email" required />

                        <x-form-error name='email'/>
                    </div>
                </x-form-field>



                <x-form-field>
                    <x-form-label for="password">Password</x-form-label> 
                    <div class="mt-2">
                        <x-form-input id="password" name="password" type="password" required />

                        <x-form-error name='password'/>
                    </div>
                </x-form-field>


                <x-form-field>
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label> 
                    <div class="mt-2">
                        <x-form-input id="password_confirmation" name="password_confirmation" type="password" required />

                        <x-form-error name='password_confirmation'/>
                    </div>
                </x-form-field>
            </div>
            

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>