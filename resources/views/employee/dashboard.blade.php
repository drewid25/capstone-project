
@include('partials.header')
<x-employeenav />
<div class="container bg-letter py-6 px-6 h-full mx-auto grid grid-col-12 grid-flow-col ">
<x-employeesidebar  />

<x-employeeprofile :inventories=$inventories />
<x-employeerightbar/>

</div>

@include('partials.footer')