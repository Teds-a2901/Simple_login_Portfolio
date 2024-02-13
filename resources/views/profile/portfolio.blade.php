@include('partial.__header', ['title'=>'Portfolio'])
<x-messages/>
<x-nav/>
<div id="main">
    <div class='text-left text-white'>
        <div class='pt-36 flex flex-col max-w-xl m-auto h-full item-center justify-center start leading-relaxed'>
        <form class="flex flex-nowrap" action="/logout" method="POST">
          @csrf
          <h1 class='flex flex-row mb-2'><img class="h-[25px] w-[25px] mr-2" src="{{URL('images/orbit.svg')}}" color='green'/> Online.</h1>
          <p class="text-gray-500 text-2lg mx-5">|</p>

          <p class=" flex flex-row text-white text-2lg mx-5"><img class="h-[25px] w-[25px] mr-2" src="{{URL('images/usercircle.svg')}}"> {{(auth()->User()->name)}}</p>

          <p class="text-gray-500 text-2lg mx-5">|</p>

          <button class="flex flex-row mb-2 hover:text-amber-500"><img class="h-[25px] w-[25px] mr-2" src="{{URL('images/exit.svg')}}"/>Logout</button>
        </form>




        <p class='text-5xl font-semibold'>Hello, My name is Teds</p>
        <h1 class='text-transparent text-5xl font-semibold bg-gradient-to-l from-indigo-500 via-purple-500 to-pink-500 bg-clip-text'>Web Developer.</h1>
        <div class='flex grid-cols-3 gap-2 text-center item-left my-8'>
        <a class='flex flex-row p-3 px-8 transition ease-in-out delay-75 bg-black hover:-translate-y-1 hover:scale-110 hover:text-amber-500 rounded-lg  hover:bg-gray-500 duration-300' href="https://www.linkedin.com/in/mtedra789" target="_blank" rel="noopener noreferrer">
        <img class="-row h-[25px] w-[25px] mr-1" src="{{URL('images/linkedin.svg')}}"> linkedIn</a>
        <a class='flex flex-row p-3 px-8 transition ease-in-out delay-75 bg-black hover:-translate-y-1 hover:scale-110 hover:text-amber-500 rounded-lg  hover:bg-gray-500 duration-300' href="mailto:marktedra29@gmail.com?body="  rel="noopener noreferrer">
        <img class="h-[25px] w-[25px] mr-1" src="{{URL('images/gmail-light.svg')}}">Email</a>
        <a class='flex flex-row p-3 px-8 transition ease-in-out delay-75 bg-black hover:-translate-y-1 hover:scale-110 hover:text-amber-500 rounded-lg  hover:bg-gray-500 duration-300' href={resume} download="TEDRA_MARK"  target="_blank" >
        <img class="h-[25px] w-[25px] mr-1" src="{{URL('images/document.svg')}}">Résumé</a>
        </div>
        <p class="border-gray-500 border-b-2 rounded pb-4 p-2">Hi, I am Tedra Mark V, Aspiring Web-Developer. I graduated in Arellano University Pasig,
        with a degree of Bachelor of Science in Information Technology(BSIT). Ready to create innovative web solution.</p>
        </div>
    </div>
</div>

<section id='Timeline'>
    <div class='text-white max-w-xl m-auto h-full item-center justify-center text-left mt-3 border-gray-500 border-b-2 rounded pb-4'>
    <p class='text-2xl font-semibold pl-0 pb-5'>My Timeline</p>
    
      <li class='list-none relative flex gap-8 pt-5'>
      <a class='mt-1 z-10'><img class="w-[73px] h-[20px]" src="{{URL('images/bilog.svg')}}"></a>
      <div class='before:absolute before:left-[7.2px] before:top-[30.5px] before:h-full before:w-[1.5px] before:bg-orange-300'>
      </div>
      <div>
      <p class='text-transparent text-lg font-semibold bg-gradient-to-l from-indigo-500 via-purple-500 to-pink-500 bg-clip-text '>JAN - APR - 2023</p>
      <p>Intern Developer in Noah Business Application</p>
      <p>I am responsible for quality assurance testing in a specific
        project, testing the functionality and efficiency of the
        application. Additionally, I have created report documents
        that details the errors and bugs to address all the issues within
        the application.</p>
      </div>
      </li>

      <li class='list-none relative flex gap-8 pt-5'>
      <a class='mt-1 z-10'><img class="w-[18px] h-[20px]" src="{{URL('images/bilog.svg')}}"></a>
      <div class='before:absolute before:left-[7.2px] before:top-[30.5px] before:h-full before:w-[1.5px] before:bg-gray-500'>
      </div>
      <div>
      <p class='text-transparent text-lg font-semibold bg-gradient-to-l from-indigo-500 via-purple-500 to-pink-500 bg-clip-text '>2019-2023</p>
      <p>Arellano University Andres Bonifacio Pasig</p>
      <p>Bachelor of Science In Information Technology</p>
      </div>
      </li>
      
      <li class='list-none relative flex gap-8 pt-5'>
      <a class='mt-1 z-10'><img class="w-[18px] h-[20px]" src="{{URL('images/bilog1.svg')}}"></a>
      <div class='before:absolute before:left-[7.2px] before:top-[16.5px] before:h-full before:w-[1.5px] before:bg-gray-500'>
      </div>
      <div>
      <p class='text-transparent text-lg font-semibold bg-gradient-to-l from-indigo-500 via-purple-500 to-pink-500 bg-clip-text '>2017-2019</p>
      <p>Arellano University Andres Bonifacio Pasig</p>
      <p>Information Communication Technology</p>
      </div>
      </li>
      
      <li class='list-none relative flex gap-8 pt-5'>
        <a class='mt-1 z-10'><img class="w-[18px] h-[20px]" src="{{URL('images/bilog1.svg')}}"></a>
      <div class='before:absolute before:left-[7.2px] before:top-[16.5px] before:h-full before:w-[1.5px] before:bg-gray-500'>
      </div>
      <div>
      <p class='text-transparent text-lg font-semibold bg-gradient-to-l from-indigo-500 via-purple-500 to-pink-500 bg-clip-text '>2013-2017</p>
      <p>Nagpayong HighSchool</p>
      </div>
      </li>

      <li class='list-none relative flex gap-8 pt-5'>
        <a class='mt-1 z-10'><img class="w-[18px] h-[20px]" src="{{URL('images/bilog1.svg')}}"></a>
      <div class='before:absolute before:left-[7.2px] before:top-[16.5px] before:h-full before:w-[1.5px] before:bg-gray-500'>
      </div>
      <div>
      <p class='text-transparent text-lg font-semibold bg-gradient-to-l from-indigo-500 via-purple-500 to-pink-500 bg-clip-text '>2019-2023</p>
      <p>Arellano University Andres Bonifacio Pasig</p>
      <p>Bachelor of Science In Information Technology</p>
      </div>
      </li>

      <li class='list-none relative flex gap-8'>
      <a class='mt-1 z-10'><img class="w-[18px] h-[20px]" src="{{URL('images/bilog1.svg')}}"></a>
      <div class=''>
      </div>
      <div>
      <p class='text-transparent text-lg font-semibold bg-gradient-to-l from-indigo-500 via-purple-500 to-pink-500 bg-clip-text '>2007-2013</p>
      <p clas>Ilugin Elementary School Pasig City</p>
      </div>
      </li>
    </div>
</section>

<section id='Techstack'>
    <div class='text-white flex-col max-w-xl m-auto h-full item-center justify-center text-left mt-3  border-gray-500 border-b-2 rounded pb-4'>
        <p class='text-2xl font-semibold pb-5'>Tech Stack</p>
        <p class='text-2xl font-semibold pb-5 text-center'>Programming Languages</p>
        
      <div class='flex flex-wrap justify-center gap-16'>
          <div class='flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class='object-contain h-12 w-18' src="{{URL('images/php.png')}}" alt="" />
            <span class='items-center'>PHP</span>
          </div>
          
          <div class='  flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class=' object-contain h-12 w-12' src="{{URL('images/java.png')}}" alt="" />
            <span class='items-center'>Java</span>
          </div>

          <div class=' flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class=' object-contain h-12 w-12' src="{{URL('images/javaScript.png')}}" alt="" />
            <span class='items-center'>JavaScript</span>
          </div>
      </div>
      
      <p class='text-2xl font-semibold py-5 text-center '>FrontEnd</p>
      <div class='flex flex-wrap justify-center gap-16'>
          <div class='flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class='object-contain h-12 w-18'src="{{URL('images/html.png')}}" alt="" />
            <span class='items-center'>HTML</span>
          </div>
          
          <div class='  flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class=' object-contain h-12 w-12' src="{{URL('images/css.png')}}" alt="" />
            <span class='items-center'>CSS</span>
          </div>

          <div class=' flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class=' object-contain h-12 w-12 ' src="{{URL('images/Boostrap.png')}}" alt="" />
            <span class='items-center'>Boostrap</span>
          </div>
      </div>

      <p class='text-2xl font-semibold py-5 text-center '>Tools and Database</p>
      <div class='flex flex-wrap justify-center gap-16'>
          <div class='flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class='object-contain h-12 w-18' src="{{URL('images/vit.png')}}" alt="" />
            <span class='items-center'>Vite</span>
          </div>

          <div class=' flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class=' object-contain h-12 w-12' src="{{URL('images/vb.png')}}" alt="" />
            <span class='items-center'>VB</span>
          </div>

          
          <div class='  flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class=' object-contain h-12 w-12' src="{{URL('images/git.png')}}" alt="" />
            <span class='items-center'>GIT</span>
          </div>


          <div class='flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class='object-contain h-12 w-18' src="{{URL('images/androidstudio.png')}}" alt="" />
            <span class='items-center'>Android Studio</span>
          </div>

          <div class='flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class='object-contain h-12 w-18' src="{{URL('images/vs.png')}}" alt="" />
            <span class='items-center'>VS 2022</span>
          </div>

          <div class=' flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class=' object-contain h-12 w-12' src="{{URL('images/msql.png')}}" alt="" />
            <span class='items-center'>MySQL</span>
          </div>
        </div>
      
      <p class='text-2xl font-semibold py-5 text-center '>Currently Studying</p>
      <div class='flex flex-wrap justify-center gap-16'>
          <div class='flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class='object-contain h-12 w-12' src="{{URL('images/tailwind.png')}}" alt="" />
            <span class='items-center'>Tailwind</span>
          </div>

          <div class=' flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class=' object-contain h-12 w-12'src="{{URL('images/react.png')}}" alt="" />
            <span class='items-center'>React</span>
          </div>

          
          <div class='  flex flex-col items-center justify-center rounded-lg transition ease-in-out delay-75 hover:-translate-y-1 hover:scale-110'>
            <img class=' object-contain h-12 w-12' src="{{URL('images/laravel.png')}}" alt="" />
            <span class='items-center'>laravel</span>
          </div>

      </div>
    </div>
</section>

<section id='Project'>
<div class='text-white max-w-xl m-auto h-full item-center justify-center text-left mt-3  pb-10'>
    <p class='text-2xl font-semibold pl-0 pb-5'>Project</p>
    <div class='sm:grid-cols-2 grid grid-cols-1 gap-3'>
              <div class=' bg-black/80 py-5  flex flex-col items-center justify-center rounded-lg px-0 shadow-lg shadow-cyan-500/50'>
                <span class='items-center bg-slate-500 p-1 rounded-md'>Find Vit&Groom</span>
                <img class='p-2' src="{{URL('images/vt1.png')}}" />
                <a class='items-center bg-slate-500 p-1 rounded-md' href="https://github.com/Teds-a2901/Find-Veterinary-Grooming-Services.git" target='_blank' ><FontAwesomeIcon icon={faLaptopCode} /> Source_code</a>
                <span class='items-center'></span>
              </div>

              <div class='bg-black/80 py-5  flex flex-col items-center justify-center rounded-lg px-0 shadow-lg shadow-rose-500/50'>
                <span class='items-center bg-slate-500 p-1 rounded-md'>MRCM</span>
                <img class='p-2' src="{{URL('images/mrcm1.png')}}" />
                <a class='items-center bg-slate-500 p-1 rounded-md' href="https://github.com/Teds-a2901/MRCM.git" target='_blank'><FontAwesomeIcon icon={faLaptopCode} /> Source_code</a>
                <span class='items-center'></span>
              </div>

              <div class='bg-black/80 py-5  flex flex-col items-center justify-center rounded-lg px-0 shadow-lg shadow-yellow-500/50'>
                <span class='items-center bg-slate-500 p-1 rounded-md'>Pharmacia Natin</span>
                <img class='p-2' src="{{URL('images/pn1.png')}}" />
                <a class='items-center bg-slate-500 p-1 rounded-md' href="https://github.com/Teds-a2901/MRCM.git" target='_blank'><FontAwesomeIcon icon={faLaptopCode} /> Source_code</a>
                <span class='items-center'></span>
              </div>

              <div class=' bg-black/80 py-5 flex flex-col items-center justify-center rounded-lg px-0 shadow-lg shadow-violet-500/50'>
                <span class='items-center bg-slate-500 p-1 rounded-md'>Find Vit&Groom</span>
                <img class='p-2 h-25 w-25' src="{{URL('images/om3.png')}}" />
                <a class='items-center bg-slate-500 p-1 rounded-md' href="https://github.com/Teds-a2901/Ofline_Module.git" target='_blank' ><FontAwesomeIcon icon={faLaptopCode} /> Source_code</a>
                <span class='items-center'></span>
              </div>
      </div>
</section>




@include('partial.__footer')