
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
              
                <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm  mr-2 w-40">
                Property Accountability
                </th>
                <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm  mr-2 w-40">
                Action
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
          
                <td class='border-2 border-border-gray text-grey text-center text-sm'>
                   
                    <button type="button" class="px-6
                 
                    bg-button-blue
                    text-white
                    font-medium
                    text-xs
                    text-center
                    leading-tight
                    uppercase
                    rounded
                    shadow-md
                    hover:bg-accent-blue hover:shadow-lg
                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-800 active:shadow-lg
                    transition
                    duration-150
                    ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModal">
               View
              </button>
              <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                    id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog relative w-auto pointer-events-none">
            <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Accountabilities</h5>
                <button type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <table class=" border-2 border-border-gray  ">
                    <thead>
                        <tr>
                            <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm mr-2 w-40">
                            Property Number
                            </th>
                            <th class="border-2 border-border-gray  bg-accent-blue text-letter text-sm mr-2 w-40">
                         Property Name
                            </th>
                            <th class="border-2 border-border-gray bg-accent-blue text-letter  text-sm mr-2 w-40">
                      Description
                            </th>
                            <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm  mr-2 w-40">
                  Date Acquired
                            </th>
                            <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm  mr-2 w-40">
                  Price
                            </th>
                          
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                      
                @foreach($employee->property as $property)
            
           
                        <tr>
                        
                             

                            <td class='border-2 border-border-gray text-grey text-left text-sm'>{{$property->property_number}}</td>
                            <td class='border-2 border-border-gray text-grey text-left text-sm'>{{$property->property_name}}</td>
                            <td class='border-2 border-border-gray text-grey text-left text-sm'>{{$property->description}}</td>
                            <td class='border-2 border-border-gray text-grey text-left text-sm'>{{$property->price}}</td>
                            <td class='border-2 border-border-gray text-grey text-left text-sm'>{{$property->date_acquired}}</td>
                        
                                
                           
                           
                       
                        </tr>
               

                     
                        @endforeach
                      
                 
                </table>
            </div>
      

                </td>
                    

                <td class='border-2 border-border-gray text-grey text-left text-sm'>
                   <form onsubmit="return confirm('Do you really want to update this employee')" class="text-center rounded-lg p-3">
                @csrf
                <a href="{{url('employeeupdate/'.$employee->id)}}" class=" bg-button-blue
                    text-white
                    font-medium
                    text-xs
                    text-center
                    leading-tight
                    uppercase
                    rounded
                    shadow-md
                    px-3
                    hover:bg-accent-blue hover:shadow-lg
                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-800 active:shadow-lg">
                update
                </a>
                </form>
                </td>
              
          
             
            </tr>
        
            @endforeach
           
          
        </tbody>
       
    </table>
</div>
    <div class="text-center mt-5">
        <a href="/addemployee" class="bg-letter text-accent-blue p-2 hover:bg-button-blue hover:text-letter  rounded-lg font-bold">ADD NEW EMPLOYEE</a>
    </div>


</div>