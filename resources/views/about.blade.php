
@include('layouts.sidebar')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--{{ __("You're logged in!") }}-->
                    <div class="w-auto h-32 border-solid border-4 border-indigo-600 font-serif">
                            
                            <h1 class="font-serif text-teal-800"> Hello  and Welcome to IT Cell.</h1>

                            <p class="font-mono text-justify text-orange-800">We are excited to announce the establishment of our newly constituted IT Cell, which will play a vital role in enhancing our technological capabilities and streamlining our operations. Additionally, we are thrilled to share that we will now be developing in-house software solutions to cater to the specific needs of our college.
                                
                            </p>
                            <p class="font-mono text-justify text-orange-800">One of the key objectives of the IT Cell is to develop in-house software solutions. By leveraging our internal expertise and resources, we will be able to create tailored software applications that address the unique requirements of our college community. This will not only enable us to have more control over the functionalities and security of these applications but also ensure that they align with our specific academic and administrative needs.
                                
                            </p>
                            <p class="font-mono text-justify text-orange-800">   As we embark on this exciting journey, we invite you to contribute your ideas and suggestions. We believe that your insights and feedback will be invaluable in shaping the direction and success of our IT initiatives. We will be organizing regular meetings, workshops, and training sessions to keep you informed and involved throughout the development process.
                                
                            </p>
                            <p class="font-mono text-justify text-orange-800"> Furthermore, we encourage you to reach out to the IT Cell for any IT related queries/consultancy which we would be pleased to carter with the prior approval of higher ups. Our team will be readily available to address your concerns and provide guidance.
                               We are confident that the establishment of the IT Cell and the introduction of in-house software development will contribute significantly to our college's growth and provide a technology-driven learning and administrative environment.
                                
                            </p>
                            <p class="font-mono text-justify text-orange-800">     Thank you for your attention, and we look forward to collaborating with you for new exciting IT initiatives.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
