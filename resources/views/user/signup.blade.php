@include('partial.__header', ['title'=>'Sign Up'])
    <header class="max-w-lg mx-auto mt-20 text-center">
      <a class="text-white font-bold text-2xl ">SIGN UP</a>
    </header>
    <main class="bg-white max-w-lg mx-auto p-8 my-20 rounded-lg shadow-2xl">
        <section>
            <h3 class="text-black font-bold text-2xl">Welcome to User Signup</h3>
            <p class= " text-gray-500 ">Signup your Account <a class="text-purple-500 hover:underline" href="/login">Here</a></h3>
        </section>
        <section class="mt-5">

            <form action="/store" method="POST" class="flex-col">
                @csrf
                <input class="bg-white w-full  rounded p-3 mt-5 shadow-lg" for="name" name="name" type="text" placeholder="name">
                @error('name')
                <p class="text-red-500 text-s mt-2">
                    {{$message}}
                </p>
                @enderror

                <input class="bg-white w-full  rounded p-3 mt-5 shadow-lg" for="email" name="email" type="email" placeholder="Email">
                @error('email')
                <p class="text-red-500 text-s mt-2">
                    {{$message}}
                </p>
                @enderror
                <input class="bg-white w-full  rounded p-3 mt-5 shadow-lg" for="password" name="password" type="password" placeholder="Password">
                @error('password')
                <p class="text-red-500 text-s mt-2">
                    {{$message}}
                </p>
                @enderror
                <input class="bg-white w-full rounded p-3 mt-5  shadow-lg" for="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password">
                <button class="text-white mt-5 bg-indigo-500 hover:bg-purple-700 duration-300 w-full rounded p-3 " type="submit">Sing up</button>
            </form>

        </section>
    </main>
