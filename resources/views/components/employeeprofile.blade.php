<div class="bg-accent-blue shadow-2xl py-6 px-6 col-span-7 border-r-2 border-l-2 border-r-letter border-l-letter">
     <div class="flex mt-5  items-center">
        <img src="{{asset('images/'. $user->admin_image)}}" alt="" class="h-16 w-16 rounded-lg">
        <div class="ml-3 ">
          <h1 class="font-bold text-gray-text">Andrew Idanol</h1>
            <p class="text-gray-text">IT Department</p>
        </div>
    
   
  </div>
  
   
  {{-- <h1 class="text-center mb-3 font-bold t text-letter text-2xl">List of Accountablity</h1> --}}
  <h2 class="text-letter  text-center font-bold">Property Accountabilities</h2>  
  <div class="flex flex-col ">
       
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white px-4 py-4">
              <table class="min-w-full border text-center ">
                <thead class="border-b bg-accent-blue">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                      Property Number
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                 Item
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4  border-r">
                     Description
                    </th>
                    <th scope="col"  class="text-sm font-medium text-white px-6 py-4 col-span-2 border-r">
                     Options
                    </th>
                    <th scope="col"  class="text-sm font-medium text-white px-6 py-4 col-span-2  border-r">
                    Status
                    </th>
                   
                  </tr>
                </thead class="border-b">
                <tbody>
                  <tr class="bg-white border-b  transition duration-300 ease-in-out hover:bg-button-blue">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900  border-r">B-001</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap  border-r">
                     Laptop
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                     Macbook Air-2023
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                        <button class="bg-button-blue px-3 py-2 rounded-lg text-letter  hover:bg-accent-blue">Transfer</button>
                      
                        
                         <button class="bg-button-blue px-3 py-2 rounded-lg text-letter  hover:bg-accent-blue ">Return</button>
                         </td>
                  </tr class="bg-white border-b">
                  
                  <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-button-blue">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 transition duration-300 ease-in-out hover:bg-button-blue border-r">B-002</td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                     Laptop
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                     Macbook Air-2023
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                   <button class="bg-button-blue px-3 py-2 rounded-lg text-letter hover:bg-accent-blue">Transfer</button>
                 
                   
                    <button class="bg-button-blue px-3 py-2 rounded-lg text-letter hover:bg-accent-blue ">Return</button>
                    </td>
                  
                  </tr class="bg-white border-b">
                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   
    
</div>