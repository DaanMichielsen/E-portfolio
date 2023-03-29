<footer class="container mx-auto p-4 text-sm border-t flex justify-between items-center">
    <div>Portfolio - © {{ date('Y') }}</div>
    <div class="flex flex-row">
        <div><a class="hover:text-teal-300 mx-2" href="https://github.com/DaanMichielsen" target="_blank">Github - <i class="fa-brands fa-github"></i></a></div>
        <div><a class="hover:text-teal-300 mx-2" href="https://www.linkedin.com/in/daan-michielsen-891577270/">LinkedIn - <i class="fa-brands fa-linkedin"></i></a></div>
    </div>
    <div>Built with <a class="hover:text-teal-300" href="https://laravel.com/">Laravel - <i class="fa-brands fa-laravel"></i></a> {{ app()->version() }}</div>
</footer>
