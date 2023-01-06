

<x-guest-layout>

    <div class='flex justify-end items-end'>
        <button class="rounded-lg bg-gray-400 px-2">
            <a href={{ route('admin.logout') }}>
                Logout
            </a>
        
            
        </button>
    </div>

     <div>
        @if (Session::has('error'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-4"
                role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg></div>
                    <div>
                        <p class="font-semibold">{{ session::get('error') }}</p>
                    </div>
                </div>
            </div>

        @endif

        <h2>
            Admin Dashboard!
        </h2>

        <div class="flex justify-between m-4" >

            <div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    {{-- Button --}}
                    Admin Settings
                  </button>
                  
            </div>

            <div>
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href={{ route('users') }}>
                        Student Details
                    </a>
                  </button>
            </div>

        </div>
    </div>
</x-guest-layout>  
