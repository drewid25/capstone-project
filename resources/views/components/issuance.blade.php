<div class="bg-gray-text col-span-7 h-full w-full shadow-2xl py-6 px-3 border-r-2 border-l-2 border-r-letter border-l-letter">
    <h1 class="text-white font-bold text-4xl mb-3 text-center">Issuance</h1>
    <div class="bg-white h-8/12 py-4 px-4">
      <form action="{{url('/search')}}" method="GET" class="py-6 px-2 bg-accent-blue h-50 flex flex-col mx-auto shadow-2xl"  >
        @csrf
  
             <div class="flex flex-col">
                 <div class="p-3 flex flex-row bg-accent-blue w-full">
                     <label for="" class="text-letter mr-3">Property Number:</label>
                     <input  name="query" type="search" class="focus-border-accent-blue" placeholder=" search property number">
                    
                     
                 </div>
              
                </div>
               
                 
                 
            
           
          
               
                
      
        <div class="text-center">
          <button class="text-lg rounded-full font-bold hover:bg-gray-text text-accent-blue bg-letter hover:text-letter w-24 rounded-lg font-bold mt-5" type="submit">Submit</button>
        </div>
     
        
         
      </form>
    </div>
    
   
  </div>
