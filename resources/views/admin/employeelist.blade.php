@include('partials.header')
     <x-adminnav/>
     <div class="container px-6 py-10 bg-white h-full mx-auto  grid grid-cols-3  grid-flow-col ">
     <x-adminsidebar/>
    
     <div class="bg-white shadow-2xl py-6 h-screen col-span-4 border border-border-gray overflow-auto">
        <h1 class="text-2xl font-bold text-center mb-3 text-accent-blue">LIST OF EMPLOYEES</h1>
     
        <table class="container border-2 border-border-gray  ">
            <thead>
                <tr>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm mr-2 w-40">
                    ID number
                    </th>
                    <th class="border-2 border-border-gray  bg-accent-blue text-letter text-sm mr-2 w-40">
                    Employee Name
                    </th>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter  text-sm mr-2 w-40">
                     Department/Office
                    </th>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm  mr-2 w-40">
                   Email Address
                    </th>
                    
                </tr>
            </thead>
            <tbody>
          
                @foreach($employees as $employee)
                <tr >
                    <td class='border-2 border-border-gray text-grey text-left text-sm'>{{$employee->ID_number}}</td>
                    <td class='border-2 border-border-gray text-grey text-left text-sm'>{{$employee->employee_name}}</td>
                    <td class='border-2 border-border-gray text-grey text-left text-sm'>{{$employee->department}}</td>
                    <td class='border-2 border-border-gray text-grey text-left text-sm'>{{$employee->email_address}}</td>
                  
              
                 
                </tr>
                @endforeach
               
              
            </tbody>
           
        </table>
        <div class="text-center mt-5">
            <a href="/addemployee" class="bg-accent-blue text-letter p-2  rounded-lg font-bold">ADD NEW EMPLOYEE</a>
        </div>
    
    
    </div>
     <x-adminrightbar/>
 
    </div>

@include('partials.footer')