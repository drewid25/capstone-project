<div class="bg-accent-blue shadow-2xl py-6 px-3 h-screen col-span-7 border-r-2 border-l-2 border-r-letter overflow-auto">
    <h1 class="text-2xl font-bold text-center mb-3 text-letter">LIST OF EMPLOYEES</h1>
   <div class="bg-white py-6 px-3 h-96 py-4 px-4 rounded-lg shadow-2xl">
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
</div>
    <div class="text-center mt-5">
        <a href="/addemployee" class="bg-letter text-accent-blue p-2 hover:bg-button-blue hover:text-letter  rounded-lg font-bold">ADD NEW EMPLOYEE</a>
    </div>


</div>