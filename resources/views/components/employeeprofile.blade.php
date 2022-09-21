<div class="bg-accent-blue shadow-2xl py-6 px-6 col-span-7 border-r-2 border-l-2 border-r-letter border-l-letter">
     <div class="flex mt-5  items-center">
        <img src="{{asset('images/'. auth()->user()->employee_image)}}" alt="" class="h-16 w-16 rounded-lg">
        <div class="ml-3 ">
          <h1 class="font-bold text-gray-text">{{auth()->user()->name}}</h1>
            <p class="text-gray-text">{{auth()->user()->employee_position}}</p>
            <p class="text-gray-text">{{auth()->user()->department}}</p>
        </div>
    
   
  </div>

  
  {{-- <h1 class="text-center mb-3 font-bold t text-letter text-2xl">List of Accountablity</h1> --}}
  
 <h1 class="text-center text-letter font-bold">Property Accountabilities</h1>
  <div class="flex flex-col ">
       
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white px-4 py-4">
            <table class="min-w-full border text-center" >
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
                    
                   
                  </tr>
                </thead class="border-b">
                <tbody >
               
   
    @foreach ($inventories as $inventory ) 
    @if($inventory->user_id === auth()->user()->id)
     
      <tr>
                   
        <td class='border-2 border-border-gray text-grey text-center text-sm '>{{$inventory->property_number}}</td>
        <td class='border-2 border-border-gray text-grey text-center text-sm '>{{$inventory->property_name}}</td>
        <td class='border-2 border-border-gray text-grey text-center text-sm '>{{$inventory->description}}</td>
        <td class='border-2 border-border-gray text-grey text-center text-sm '>
          <button class="bg-button-blue rounded-lg px-3 text-sm text-letter">Transfer</button>
          <button  class="bg-button-blue rounded-lg px-3 text-sm text-letter">Return</button>
        </td>

     
      </tr>
    
    
    @endif
                
                  
                  @endforeach
               
                </tbody>
              </table>
             
            </div>
          </div>
        </div>
      </div>
   
    
</div>