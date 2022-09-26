<div class="w-6/12 h-6/12 border-4 text-white border-white rounded-sm">

    <div class="p-2 text-lg text-center font-bold bg-gray-900">
        <h1>Pinguim do Laravel | <span class="text-orange-500">Calcu</span>lator (Darlley)</h1>
    </div>
    <div class="bg transparent p-4 flex flex-col items-end">
        <div class="w-full">

            @if ($math)
            <input type="text" wire:model='math' class="text-violet-600 w-full text-right bg-transparent focus:ring-0 border-0 outline-0 rounded-md">
            @endif
            
            @error('math')
            <p class="text-red-500 text-right w-full">{{ $message }}</p>
            @enderror

        </div>
        <div>
            <p>= <span class="text-orange-500">{{ $result }}</span></p>
        </div>
    </div>
    <div class="bg-gray-900 p-4 flex flex-col gap-4 py-8 px-8">
        <div class="w-full flex justify-between">
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='operation("%")'>%</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath("(")'>(</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(")")'>)</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='operation("/")'>/</button>
        </div>

        <div class="w-full flex justify-between">
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(7)'>7</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(8)'>8</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(9)'>9</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='operation("x")'>x</button>
        </div>

        <div class="w-full flex justify-between">
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(4)'>4</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(5)'>5</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(6)'>6</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='operation("-")'>-</button>
        </div>

        <div class="w-full flex justify-between">
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(1)'>1</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(2)'>2</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(3)'>3</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='operation("+")'>+</button>
        </div>

        <div class="w-full flex justify-between">
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='clear'>C</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(0)'>0</button>
            <button class="bg-gray-800 rounded-full border-2 border-violet-600 hover:bg-violet-600 p-2 w-10 h-10 flex items-center justify-center" wire:click='addMath(".")'>.</button>
            <button class="bg-orange-500 rounded-full border-2 border-orange-500 p-2 w-10 h-10 flex items-center justify-center" wire:click='operation("=")'>=</button>
        </div>
    </div>

</div>
