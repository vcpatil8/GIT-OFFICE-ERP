
@include('layouts.sidebar')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Registation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        
                <div class="grid gap-6 mb-6 md:grid-cols-2 w-64 p-8">
                    
                    <x-bladewind.input placeholder="Full name"  label="Fullname" class="w-32 mr-4"/>
                    <x-bladewind.datepicker placeholder="Date of Birth" label="Date of Birth" class="w-16" />
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2 w-32  p-4">
                    <x-bladewind.radio-button label="Male" name="gender" class="" />
                    <x-bladewind.radio-button label="Female" name="gender"  />
                    <x-bladewind.radio-button label="Others" name="gender"  />

                   <?php 
                   $countries = [
                        [ 'label' => 'Benin',         'value' => 'bj' ],
                        [ 'label' => 'Burkina Faso',  'value' => 'bf' ],
                        [ 'label' => 'Ghana',         'value' => 'gh' ],
                        [ 'label' => 'Nigeria',       'value' => 'ng' ],
                        [ 'label' => 'Kenya',         'value' => 'ke' ]
                    ]; 
                    ?>
                    
                    <x-bladewind.dropdown
                    name="country"
                    data="{{ json_encode($countries) }}" 
                    
                    />
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2 w-64 p-4">
                    
                    <x-bladewind.input name="mobile"
                        label="Mobile             "
                        placeholder="000.0000.000"
                        show_placeholder_always="true" />
                    <x-bladewind.input placeholder="Personal Email"  label="Personal Email" class="w-32 mr-4"/>
                
                
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2 w-64 p-4">
                
                    <x-bladewind.input placeholder="Your Adhar Number"  label="Adhar Card Number" class="w-32 mr-4"/>
                
                    <x-bladewind.dropdown
                    name="country"
                    data="{{ json_encode($countries) }}" 
                    label="Country of Origin"/>
                
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2 w-64 p-4">
                
                  
                
                    <x-bladewind.dropdown
                    name="country"
                    data="{{ json_encode($countries) }}"
                    label="Nationality / Country" />
                    
                    <x-bladewind.dropdown
                    name="country"
                    data="{{ json_encode($countries) }}"
                    label="Mother tounge" />
                
                </div>
                <div class="w-40 p-8">
                    <x-bladewind::button size="small">Save User</x-bladewind::button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
