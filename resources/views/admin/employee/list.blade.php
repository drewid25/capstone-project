@include('partials.header')

<x-adminnav :companies=$companies />
<div class="bg-letter h-screen  grid grid-cols-12 grid-flow-col ">
    <x-adminsidebar />
    <x-employee.index :users=$users />


</div>
@foreach ($companies as $company)
    <footer class=" bg-gray-100 justify-center py-4 bottom-0 flex flex-row z-20 ">
        <div class="text-gray-800 flex flex-col text-center p-2 ">


            <p class="mr-2 text-gray-800  font-bold">{{ $company->company_name }}</p>

            <a class="text-gray-800  " href="https://tailwind-elements.com/">Property Management System</a>
            <p class="">© 2022 Copyright.</p>
        </div>
    </footer>
@endforeach

@include('partials.footer')
