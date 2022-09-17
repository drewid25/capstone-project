
 <div class="bg-gray-text col-span-7 border-r-2 border-l-2 border-r-letter border-l-letter h-full shadow-2xl py-6 px-3  ">
      <h1 class="text-letter font-bold text-2xl  mb-3 text-center">Add Employee</h1>
      <div class="bg-white h-8/12 p-6 w-8/12 mx-auto shadow-2xl rounded-lg py-4 px-4">
       <form action="{{ route('addemployeelist') }}" method="POST" enctype="multipart/form-data" type="submit" class="py-6 px-2 bg-accent-blue h-50 flex flex-col w-12/12 mx-auto shadow-2xl"  >
         @csrf
         
              <div class="flex flex-col">
                  <div class="p-3 flex flex-col bg-accent-blue w-50">
                      <label for="ID_number" class="text-letter mr-3">ID Number</label>
                      <input type="text" name="ID_number" class="focus-border-accent-blue">
                  </div>
                  <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="employee_name" class="text-letter mr-3">Employee Name</label>
                    <input type="text" name="employee_name" class="focus-border-accent-blue">
                 </div>
                  <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="login_password" class="text-letter mr-3">Email Address</label>
                    <input type="email" name="email_address" class="focus-border-accent-blue">
                 </div>
                  <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="login_password" class="text-letter mr-3">Default Login Password</label>
                    <input type="password" name="login_password" class="focus-border-accent-blue">
                 </div>
                  <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="employee_image" class="text-letter mr-3">Upload Profile Picture</label>
                    <input type="file" name="employee_image" class="focus-border-accent-blue">
                 </div>
           
                 
                 </div>
               
                  
                  <div class="p-3 flex flex-col bg-accent-blue">
                      <label for="department" class="text-letter mr-3">Department/Office</label>
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
                               
  <div class="text-center">
    <button class="text-lg rounded-full font-bold hover:bg-gray-text bg-letter text-accent-blue  hover:text-letter w-24 h-15 text-center" type="submit">Add</button>
  </div>
                 
          
         
      
          
          
       </form>

      </div>

    

</div>