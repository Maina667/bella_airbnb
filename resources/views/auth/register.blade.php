<x-layout>
    <h3 class="mx-auto max-w-screen-sm text-center text-xl font-bold text-">Sign In</h3>
    <h1 class="mx-auto max-w-screen-sm text-center text-3xl font-bold mb-2">Register to create account</h1>
    <div
        class="flex flex-col shadow-sm rounded-xl p-4 md:p-5 max-w-screen-sm mx-auto bg-violet-50 border border-slate-900">
        <form action="{{ Route('register')}}" method="post">
            @csrf
            {{--email--}}
            <div class="relative mb-2">
                <input name="email" value="{{ old('email') }}" type="text" id="hs-floating-input-passowrd"
                class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2 @error('email') border-red-500 ring-0 ring-red-500 @enderror"
                    placeholder="Email">
                <label for="hs-floating-input-passowrd"
                class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none
                peer-focus:scale-90
                peer-focus:translate-x-0.5
                peer-focus:-translate-y-1.5
                peer-focus:text-gray-500
                peer-[:not(:placeholder-shown)]:scale-90
                peer-[:not(:placeholder-shown)]:translate-x-0.5
                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                peer-[:not(:placeholder-shown)]:text-gray-500">Email</label>
                @error('email')
                    <p class="text-xs text-red-500 mt-1"> {{ $message }} </p>
                @enderror
            </div>
            {{--usrname--}}
            <div class="relative mb-2">
                <input name="username" value="{{ old('username') }}" type="text" id="hs-floating-input-passowrd"
                class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2 @error('username') border-red-500 ring-0 ring-red-500 @enderror"
                    placeholder="Username">
                <label for="hs-floating-input-passowrd"
                class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none
                peer-focus:scale-90
                peer-focus:translate-x-0.5
                peer-focus:-translate-y-1.5
                peer-focus:text-gray-500
                peer-[:not(:placeholder-shown)]:scale-90
                peer-[:not(:placeholder-shown)]:translate-x-0.5
                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                peer-[:not(:placeholder-shown)]:text-gray-500">Username</label>
                @error('username')
                    <p class="text-xs text-red-500 mt-1"> {{ $message }} </p>
                @enderror
            </div>
              {{--password--}}
              <div class="relative mb-2">
                <input name="password" type="password" id="hs-floating-input-email"
                class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2 @error('password') border-red-500 ring-0 ring-red-500 @enderror"
                    placeholder="xxxxxxxxxxx">
                <label for="hs-floating-input-email"
                class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none
                peer-focus:scale-90
                peer-focus:translate-x-0.5
                peer-focus:-translate-y-1.5
                peer-focus:text-gray-500
                peer-[:not(:placeholder-shown)]:scale-90
                peer-[:not(:placeholder-shown)]:translate-x-0.5
                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                peer-[:not(:placeholder-shown)]:text-gray-500">password</label>
                @error('password')
                    <p class="text-xs text-red-500 mt-1"> {{ $message }} </p>
                @enderror
            </div>
            {{--confirmed password--}}
            <div class="relative mb-2">
                <input name="password_confirmation" type="password" id="hs-floating-input-email"
                class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2 @error('password') border-red-500 ring-0 ring-red-500 @enderror"
                    placeholder="xxxxxxxxxxx">
                <label for="hs-floating-input-email"
                class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none
                peer-focus:scale-90
                peer-focus:translate-x-0.5
                peer-focus:-translate-y-1.5
                peer-focus:text-gray-500
                peer-[:not(:placeholder-shown)]:scale-90
                peer-[:not(:placeholder-shown)]:translate-x-0.5
                peer-[:not(:placeholder-shown)]:-translate-y-1.5
                peer-[:not(:placeholder-shown)]:text-gray-500">confirm password</label>
                @error('password')
                    <p class="text-xs text-red-500 mt-1"> {{ $message }} </p>
                @enderror
            </div>
            <button class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:bg-slate-400 disabled:cursor-wait">Register</button>
            
            <p class="mt-4 text-sm text-center text-gray-600">
                Already have an account? 
                <a href="{{ Route('login')}}" class="text-blue-500 hover:underline">Log in</a>
            </p>
            <!-- divider-->
           
        </form>
        <div class="relative flex items-center justify-center my-6">
            <span class="absolute px-4 text-gray-500 bg-violet-50">OR</span>
            <hr class="w-96 border-gray-300" />
        </div>
        <a href="{{ Route('google-auth')}}">
            <div class="mb-6">
                <button class="w-full py-3 text-gray-700 border border-gray-300 rounded-lg ">
                    <i class="fa-brands fa-google"></i> Continue with google
                </button>
            </div>
        </a>
        <div class="mb-6">
            <button class="w-full py-3 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100">
                <i class="fa-brands fa-facebook"></i> Sign in with facebook
            </button>
        </div>
    </div>
</x-layout>
