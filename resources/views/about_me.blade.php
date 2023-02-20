<x-e-portfolio-layout>
    <x-slot name="description">Information about me</x-slot>
    <x-slot name="title">Personal information</x-slot>
    <p>This page contains more in depth information about me as a person and student.</p>
    <div class="relative max-w-md mx-auto md:max-w-2xl mt-[6rem] min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-xl mt-16">
        <div class="px-6">
            <div class="flex flex-wrap justify-center">
                <div class="w-full flex justify-center">
                    <div class="relative">
                        <img src="{{url('/image-daan.jpg')}}" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" alt="Image Daan"/>
                    </div>
                </div>
                <div class="w-full text-center mt-[3rem]">

                </div>
            </div>
            <div class="text-center mt-2">
                <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Daan Michielsen</h3>
                <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                    <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Beerse, Belgium
                </div>
            </div>
            <div class="mt-6 py-6 border-t border-slate-200 text-center">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full px-4">
                        <p class="leading-relaxed text-slate-600">Hi, I am Daan, I was born in 2003 and live in Beerse with my parents and brother.
                            I study <b>Applied Computer Science</b> at Thomas More in Geel. I've <b>always been into tech and
                                computers</b> when growing up that is why
                            I chose to <b>study ACS at Thomas More</b>. If you would like to check out some of my work you can look at the
                            <a class="underline hover:text-teal-300" href="{{ route('projects') }}">projects page</a> or at my <a class="underline hover:text-teal-300" target="_blank" href="https://github.com/DaanMichielsen">github</a>.</p>
                        <p class="leading-relaxed text-slate-600 mt-3">In my time outside of school I like to fitness and ping pong to stay active and healthy. in the weekends I like to go out with my friends because friendship is very important to me.</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="../../public/images/CV_Daan_Michielsen.pdf" download class="bg-grey-light hover:bg-grey text-grey-darkest hover:text-teal-300 font-bold py-2 px-4 rounded inline-flex items-center">
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
            <span>Download CV</span>
        </a>
    </div>
</x-e-portfolio-layout>
