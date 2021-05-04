<x-headed-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Publications
        </h2>
    </x-slot>

    <div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            	
        	<div class="w-full md:w-1/2">
            	<iframe src ="{{ asset('/laraview/#../pdf/alansar-masjid-handbook.pdf') }}" class="w-full " height="500px"></iframe>        		
        	</div>


        </div>

    </div>

    <div class="bg-white">
    	@livewire('footer')
    </div>

</x-headed-guest-layout>
