@include('partials.header')
     <x-nav/>
     <div class="container p-6 bg-gray h-screen mx-auto mt-10 grid grid-cols-3  grid-flow-col ">
     <x-sidebar/>
    
     <div class="bg-white shadow-2xl py-6  col-span-4 border border-border-gray">
        <h1 class="text-4xl font-bold text-center mb-3 text-accent-blue">Employee LIST</h1>
        <table class="container border-2 border-border-gray">
            <thead>
                <tr>
                    <th class="border-2 border-border-gray  text-grey mr-2 w-40">
                    ID number
                    </th>
                    <th class="border-2 border-border-gray  text-grey mr-2 w-40">
                    Employee Name
                    </th>
                    <th class="border-2 border-border-gray text-grey  mr-2 w-40">
                     Department/Office
                    </th>
                    
                </tr>
            </thead>
            <tbody>
          
                @foreach($employees as $employee)
                <tr>
                    <td class='border-2 border-border-gray text-grey text-center'>{{$employee->ID_number}}</td>
                    <td class='border-2 border-border-gray text-grey text-center'>{{$employee->employee_name}}</td>
                    <td class='border-2 border-border-gray text-grey text-center'>{{$employee->department}}</td>
                  
              
                 
                </tr>
                @endforeach
               
              
            </tbody>
           
        </table>
    
    
    </div>
     <x-rightbar/>
 
    </div>

@include('partials.footer')