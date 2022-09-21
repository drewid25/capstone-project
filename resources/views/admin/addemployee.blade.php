@include('partials.header')

<x-adminnav :companies=$companies />
<div class="container bg-letter py-6 px-6 h-full mx-auto grid grid-cols-12 grid-flow-col shadow-2xl">
    <x-adminsidebar />
    <x-addemployee />
    <x-adminrightbaraddemployee />
</div>

 @foreach ($companies as $company)

 <footer class=" container  mx-auto bg-accent-blue justify-center bottom-0 flex flex-row z-20 mt-20">
    <div class="text-gray-800 flex flex-col text-center p-2 ">
     
      
      <p class="mr-2 text-gray-800  font-bold">{{$company->company_name}}</p>
      
      <a class="text-gray-800  " href="https://tailwind-elements.com/">Property Management System</a>
      <p class="">© 2022 Copyright.</p>
    </div>
  </footer>
 @endforeach
 


@include('partials.footer')