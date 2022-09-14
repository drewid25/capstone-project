
@include('partials.header')
<x-employeenav/>
<div class="container bg-letter py-6 px-6 h-full mx-auto grid grid-cols-3  grid-flow-col ">
<x-employeesidebar/>
<x-table/>
<x-employeerightbar/>

</div>

@include('partials.footer')