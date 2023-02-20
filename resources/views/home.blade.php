<x-e-portfolio-layout>
    <x-slot name="description">This page is a place where you can learn more about me as a person and as a student in applied computer science. Hope you enjoy your stay :)</x-slot>
    <x-slot name="title"></x-slot>
    <section class="py-[2rem] flex items-center min-h-[50%] justify-center mt-[3rem]">
        <div class="mx-auto max-w-[43rem]">
            <div class="text-center">
                <h1 class="mt-3 text-[3.5rem] font-bold leading-[4rem] tracking-tight text-black">Welcome to my portfolio</h1>
                <p class="mt-3 text-lg leading-relaxed text-slate-600">My name is Daan and I am a student in Applied Computer Science at Thomas More in Geel(Belgium). This page serves as a place where I can express myself and my work. I hope you enjoy your stay</p>
            </div>

            <div class="mt-6 flex items-center justify-center gap-4">
                <a href="{{ route('about-me') }}" class="transform rounded-md bg-indigo-600/95 px-5 py-3 font-medium text-white transition-colors hover:bg-indigo-700">About me</a>
                <a href="{{ route('projects') }}" class="transform rounded-md border border-slate-200 px-5 py-3 font-medium text-slate-900 transition-colors hover:bg-slate-50"> Projects </a>
            </div>
        </div>
    </section>

{{--    @push('script')--}}
{{--        <script>--}}
{{--            console.log('The Vinyl Shop JavaScript works! 🙂')--}}
{{--        </script>--}}
{{--    @endpush--}}
</x-e-portfolio-layout>
