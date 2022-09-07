

     <div class="bg-button-blue col-span-4 border-2 border-black h-full shadow-2xl p-6">
      <h1 class="text-white font-bold text-4xl py-6 text-center">Add Employee</h1>
       <form action="{{ route('addemployee')}}" method="POST" type="submit" class="py-6 px-2 bg-accent-blue h-50 flex flex-col w-5/12 mx-auto shadow-2xl"  >
         @csrf
          <div>
              <div class="flex flex-col">
                  <div class="p-3 flex flex-col bg-accent-blue w-50">
                      <label for="" class="text-letter mr-3">ID Number</label>
                      <input type="text" name="supplier_name" class="focus-border-accent-blue">
                  </div>
                  <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="" class="text-letter mr-3">Employee Name</label>
                    <input type="text" name="supplier_name" class="focus-border-accent-blue">
                 </div>
           
                 
                 </div>
               
                  
                  <div class="p-3 flex flex-col bg-accent-blue">
                      <label for="" class="text-letter mr-3">Department/Office</label>
                      <select name="classification"
                       id="" class="w-50" >
                      <option value="IT Department" class="text-gray-600">IT Department</option>
                      <option value="Operations">Operations</option>
                      </select>
                  </div>
                
                  
                          {{-- <select name="property_name" id="property">
                          <option value="LAPTOP" class="text-gray-600" name="property_name
                          " id="property">>LAPTOP COMPUTER</option>
                          <option value="DESKTOP COMPUTER" name="property_name" id="property">>DESKTOP COMPUTER</option>
                          <option value="CELLPHONE" name="property_name" id="property">>CELLPHONE</option>
                          <option value="TABLET" name="property_name
                          " id="property">>TABLET</option>
                          </select> --}}
                     
                  </div>
            
                 
  
                  <button class="text-white bg-button-blue" type="submit">Add</button>
          </div>
         
      
          
          
       </form>
     
    </div>
 