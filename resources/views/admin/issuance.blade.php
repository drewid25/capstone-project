@include('partials.header')
 <x-adminnav/>
 <div class="container bg-letter py-6 px-6 h-screen mx-auto grid grid-cols-12 grid-flow-col shadow-2xl">
    <x-adminsidebar/>
    <x-issuance/>
    <x-adminrightbarissuance/>
 </div>


@include('partials.footer')