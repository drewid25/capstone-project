
@include('partials.header')
 <x-adminnav :company=$company/>
 <div class="container bg-letter py-6 px-6 h-screen mx-auto grid grid-cols-12 grid-flow-col shadow-2xl">
    <x-adminsidebar/>
    <x-updateemployee :employee=$employee />
    <x-adminrightbarupdateemployee/>
 </div>


@include('partials.footer')