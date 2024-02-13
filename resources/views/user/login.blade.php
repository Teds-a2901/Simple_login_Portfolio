@include('partial.__header', ['title'=>'UserLogin'])
    <header class="max-w-lg mx-auto mt-20 text-center  ">
      <a class="text-white font-bold text-2xl ">LOG-IN</a>
    </header>
    <main class="bg-white max-w-lg mx-auto mt-20 p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="text-black font-bold text-2xl">Welcome to User Login</h3>
            <p class= " text-gray-500 ">Signup your Account <a class="text-purple-500 hover:underline" href="/signup">Here</a></h3>
        </section>
        <section class="mt-5">
            <form action="/login/process" method="POST" class="flex-col">
                @csrf
                <input class=" bg-white shadow-lg w-full  rounded p-3 mt-5"  name="email" type="email" placeholder="Email">
                <input class=" bg-white shadow-lg w-full  rounded p-3 mt-5"  name="password" type="password" placeholder="Password">
                <button type="submit" class="text-white mt-5 bg-indigo-500 hover:bg-purple-700 duration-300 w-full rounded p-3" type="submit">Login</button>
                @error('email')
                <p class="text-red-500 text-s mt-2 text-center">
                    {{$message}}
                </p>
                @enderror
            </form>

        </section>
    </main>
