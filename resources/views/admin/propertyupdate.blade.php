@include('partials.header')
 <x-adminnav :companies=$companies />
 <div class="container bg-letter py-6 px-6 h-full mx-auto grid grid-cols-12 grid-flow-col shadow-2xl">
    <x-adminsidebar/>
    <x-updateproperty :property=$property />
    <x-adminrightbarupdateemployee/>
 </div>


@include('partials.footer')