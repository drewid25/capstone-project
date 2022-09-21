@include('partials.header')

<x-adminnav :companies=$companies />
<div class="container bg-letter py-6 px-6 h-screen mx-auto grid grid-cols-12 grid-flow-col shadow-2xl mb-5">
    <x-adminsidebar />
    <x-inventory_list :inventories=$inventories />
    <x-adminrightbardashboard />

</div>

<footer class="bg-accent-blue justify-center bottom-0 flex flex-row z-20 mt-20">
    <div class="text-gray-800 p-4 ">
      © 2022 Copyright.
      <a class="text-gray-800" href="https://tailwind-elements.com/">Property Management System</a>
    </div>
  </footer>
@include('partials.footer')
