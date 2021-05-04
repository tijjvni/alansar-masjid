<x-headed-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Live Program 					  

            <span class="animate-ping absolute h-3 w-3 rounded-full bg-green-400 opacity-75"></span>

        </h2>
    </x-slot>

    <div>
    </div>

    <div class="py-12">

      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            	<iframe src ="https://www.youtube.com/embed/live_stream?channel=UCrhuDeogKADcjiJDtUUBJew&autoplay=1" class="w-full " height="500px"></iframe> 
            </div>
        </div>

    </div>

    <div class="bg-white">
    	@livewire('footer')
    </div>

</x-headed-guest-layout>
