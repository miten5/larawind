<x-app-layout title="Buttons">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Buttons
        </h2>

        <!-- Button sizes -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Sizes
        </h4>
        <div class="flex flex-col flex-wrap mb-4 space-y-4 md:flex-row md:items-end md:space-x-4">
            <!-- Divs are used just to display the examples. Use only the button. -->
            <div>
                <button class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Larger button
                </button>
            </div>

            <!-- Divs are used just to display the examples. Use only the button. -->
            <div>
                <button class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Large button
                </button>
            </div>

            <!-- Divs are used just to display the examples. Use only the button. -->
            <div>
                <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Regular
                </button>
            </div>

            <!-- Divs are used just to display the examples. Use only the button. -->
            <div>
                <!-- For disabled buttons ADD these classes: 
      opacity-50 cursor-not-allowed

      And REMOVE these classes:
      active:bg-purple-600 hover:bg-purple-700 focus:shadow-outline-purple
    -->
                <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg opacity-50 cursor-not-allowed focus:outline-none">
                    Disabled
                </button>
            </div>

            <!-- Divs are used just to display the examples. Use only the button. -->
            <div>
                <button class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Small
                </button>
            </div>
        </div>
        <p class="mb-8 text-gray-700 dark:text-gray-400">
            Apply
            <code>w-full</code>
            to any button to create a block level button.
        </p>

        <!-- Buttons with icons -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Icons
        </h4>
        <div class="flex flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4">
            <!-- Divs are used just to display the examples. Use only the button. -->
            <div>
                <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <span>Icon right</span>
                    <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
                        <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <!-- Divs are used just to display the examples. Use only the button. -->
            <div>
                <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
                        <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                    <span>Icon left</span>
                </button>
            </div>

            <!-- Divs are used just to display the examples. Use only the button. -->
            <div>
                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" aria-label="Like">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <!-- Divs are used just to display the examples. Use only the button. -->
            <div>
                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" aria-label="Edit">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</x-app-layout>