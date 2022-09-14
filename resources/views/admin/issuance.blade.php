@include('partials.header')
 <x-adminnav/>
 <div class="container bg-letter py-6 px-6 h-screen mx-auto grid grid-cols-3 grid-flow-col shadow-2xl">
    <x-adminsidebar/>
    <div class="bg-button-blue col-span-6 border-2 border-black h-screen w-full shadow-2xl p-6">
        <h1 class="text-white font-bold text-4xl mb-3 text-center">Issuance</h1>
        <div class="bg-white h-8/12 p-6">
          <form action="{{ route('issuance')}}" method="POST" type="submit" class="py-6 px-2 bg-accent-blue h-50 flex flex-col mx-auto shadow-2xl"  >
            @csrf
      
                 <div class="flex flex-row">
                     <div class="p-3 flex flex-col bg-accent-blue w-full">
                         <label for="" class="text-letter mr-3">Property Number</label>
                         <input type="text" name="property_number" class="focus-border-accent-blue">
                     </div>
                     <div class="p-3 flex flex-col bg-accent-blue w-full">
                         <label for="" class="text-letter mr-3">Employee_id</label>
                         <input type="text" name="employee_id">
                     </div>
                    </div>
                   
                     
                     
                
               
              
                   
                    
          
            <div class="text-center">
              <button class="text-white bg-button-blue w-24 rounded-lg font-bold" type="submit">Submit</button>
            </div>
         
            
             
          </form>
        </div>
        
       
      </div>
    
    <x-adminrightbar/>
 </div>


@include('partials.footer')