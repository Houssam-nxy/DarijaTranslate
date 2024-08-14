<x-layout>
    <div class="min-h-screen flex flex-col md:flex-row p-4 md:p-8">
        <!-- Input Section -->
        <div class="input_tran w-full md:w-1/2 flex mb-0 md:mb-0">
            <form action="{{ route('store') }}" method="post" class="w-full max-w-lg p-">
                @csrf
                <textarea name="text_tran" id="text_tran"
                    class="backdrop-blur-xl bg-white/30 w-full h-64 md:h-96 border-2 border-black rounded-lg p-4 resize-none outline-none placeholder-gray-500"
                    placeholder="Enter your text here" required>{{ old('text_tran', $text ?? '') }}</textarea>


                <button type="submit" class="mt-4 py-2 w-full md:w-32 text-center border-2 bg-black text-white rounded-lg">
                    Translate
                </button>
            </form>
        </div>

        <!-- Output Section -->
        <div id="output_tran" class="output_tran w-full md:w-1/2 flex justify-center items-start">
            <div class="backdrop-blur-xl bg-white/30 w-full h-64 md:h-96 border-2 border-black rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-lg font-bold">Alerts</h1>
                    <a href="#" class="text-black hover:text-gray-600" onclick="document.getElementById('output_tran').style.display = 'none'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                        </svg>
                    </a>
                </div>
                <div class="pt-8">
                    @if(isset($translatedText))
                        <p>{{ $translatedText }}</p>
                    @elseif(isset($error))
                        <p class="text-red-500">{{ $error }}</p>
                    @else
                        <p>No translation available.</p>
                        <div class="p-4">
                            <ul class="list-disc list-inside text-sm">
                                <li class="mb-2">The input text must be in Darija (Moroccan Arabic).</li>
                                <li class="mb-2">The translation is limited to a maximum of 200 characters.</li>
                                <li class="mb-2">Click "Translate" to receive the output in the designated area.</li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
