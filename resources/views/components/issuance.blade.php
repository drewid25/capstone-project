<div class="bg-accent-blue col-span-7 h-full w-full shadow-2xl py-6 px-3 border-r-2 border-l-2 border-r-letter border-l-letter">
    <h1 class="text-white font-bold text-4xl mb-3 text-center">Issuance</h1>
    <div class="bg-white h-8/12 py-4 px-4">
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
          <button class="text-accent-blue bg-letter hover:bg-button-blue hover:text-letter w-24 rounded-lg font-bold mt-5" type="submit">Submit</button>
        </div>
     
        
         
      </form>
    </div>
    
   
  </div>
