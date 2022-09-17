@include('partials.header')
     <x-adminnav/>
     <div class="container py-6 px-6 bg-white h-screen mx-auto  grid grid-cols-12 grid-flow-col ">
     <x-adminsidebar/>
    
    <x-employeelist :employees=$employees />
     <x-adminrightbar/>
 
    </div>

@include('partials.footer')