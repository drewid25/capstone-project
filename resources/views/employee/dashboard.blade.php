@include('partials.header')
<x-employee_dashboard.nav :companies=$companies />
<div class="container bg-letter py-6 px-6 h-screen mx-auto grid grid-col-12 grid-flow-col ">
    <x-employee_dashboard.sidebar />

    <x-employee_dashboard.show :inventories=$inventories />


</div>
<footer class="bg-accent-blue justify-center bottom-0 flex flex-row z-20 mt-20">
    <div class="text-gray-800 p-4 ">
        © 2022 Copyright.
        <a class="text-gray-800" href="https://tailwind-elements.com/">Property Management System</a>
    </div>
</footer>

@include('partials.footer')
