 <div class="bg-letter col-span-6 border border-grey h-screen shadow-2xl p-6">
      <h1 class="text-accent-blue font-bold text-4xl py-6 text-center">Add Employee</h1>
       <form action="{{ route('addemployeelist')}}" method="POST" type="submit" class="py-6 px-2 bg-accent-blue h-50 flex flex-col w-6/12 mx-auto shadow-2xl"  >
         @csrf
         
              <div class="flex flex-col">
                  <div class="p-3 flex flex-col bg-accent-blue w-50">
                      <label for="" class="text-letter mr-3">ID Number</label>
                      <input type="text" name="ID_number" class="focus-border-accent-blue">
                  </div>
                  <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="" class="text-letter mr-3">Employee Name</label>
                    <input type="text" name="employee_name" class="focus-border-accent-blue">
                 </div>
                  <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="" class="text-letter mr-3">Email Address</label>
                    <input type="email" name="email_address" class="focus-border-accent-blue">
                 </div>
           
                 
                 </div>
               
                  
                  <div class="p-3 flex flex-col bg-accent-blue">
                      <label for="" class="text-letter mr-3">Department/Office</label>
                      <select name="department"
                       id="" class="w-50" >
                      <option value="IT Department" class="text-gray-600">IT Department</option>
                      <option value="Property Division">Property Division</option>
                      <option value="Accounting Division">Accounting Department</option>
                      <option value="Finance Division">Finance Division</option>
                      <option value="Personnel Division">Personnel</option>
                      <option value="Records Division">Records Division</option>
                      <option value="Training Division">Training Department</option>
                      <option value="Maintenance Division">Maintenance Division</option>
                      <option value="Leave Division">Leave Division</option>
                      </select>
                  </div>
                
                  
                          {{-- <select name="property_name" id="property">
                          <option value="LAPTOP" class="text-gray-600" name="property_name
                          " id="property">>LAPTOP COMPUTER</option>
                          <option value="DESKTOP COMPUTER" name="property_name" id="property">>DESKTOP COMPUTER</option>
                          <option value="CELLPHONE" name="property_name" id="property">>CELLPHONE</option>
                          <option value="TABLET" name="property_name
                          " id="property">>TABLET</option>
                          {{-- </select>  --}}
                     
             
            
                 
  <div class="text-center">
    <button class=" hover:bg-gray-700 hover:text-white text-white bg-button-blue w-24 text-center hover" type="submit">Add</button>
  </div>
                 
          
         
      
          
          
       </form>
     
    </div>
  
