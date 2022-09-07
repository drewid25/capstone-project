

  <div class="bg-button-blue col-span-4 border-2 border-black h-full shadow-2xl p-6">
    <h1 class="text-white font-bold text-4xl py-6 text-center">Add Property</h1>
     <form action="{{ route('createproperty')}}" method="POST" type="submit" class="py-6 px-2 bg-accent-blue h-50 flex flex-col w-fullmx-auto shadow-2xl"  >
       @csrf
 
            <div class="flex flex-row">
                <div class="p-3 flex flex-col bg-accent-blue w-full">
                    <label for="" class="text-letter mr-3">Supplier Name</label>
                    <input type="text" name="supplier_name" class="focus-border-accent-blue">
                </div>
                <div class="p-3 flex flex-col bg-accent-blue w-full">
                    <label for="" class="text-letter mr-3">Invoice Number</label>
                    <input type="text" name="invoice_number">
                </div>
               </div>
               <div class="flex flex-row">
                <div class="p-3 flex flex-col bg-accent-blue w-50">
                    <label for="" class="text-letter mr-3">Date Acquired</label>
                    <input type="text" name="date_acquired">
                </div>
                <div class="flex flex-row">
                    <div class="p-3 flex flex-col bg-accent-blue w-full">
                        <label for="" class="text-letter mr-3">Price</label>
                        <input type="text" class="w-50" name="price">
                    </div>
                    <div class="p-3 flex flex-col bg-accent-blue ">
                        <label for="" class="text-letter mr-3">Quantity</label>
                        <input type="text" class="w-50" name="quantity">
                    </div>
                </div>
               
               </div>
             
                
                <div class="p-3 flex flex-col bg-accent-blue">
                    <label for="" class="text-letter mr-3">Classification</label>
                    <select name="classification"
                     id="" class="w-50" >
                    <option value="IT AND COMMUNICATIONS EQUIPMENT" class="text-gray-600">IT AND COMMUNICATIONS EQUIPMENTS</option>
                    <option value="OFFICE EQUIPMENT">OFFICE EQUIPMENTS</option>
                    </select>
                </div>
              
                <div class="flex flex-row">
                    <div class="p-3 flex flex-col bg-accent-blue">
                        <label for="" class="text-letter mr-3">Property Number</label>
                        <input type="text" name="property_number">
                    </div>
                    <div class="p-3 flex flex-col bg-accent-blue">
                        <label for="" class="text-letter mr-3">Property Name</label>
                        <input type="text" name="property_name">
                        {{-- <select name="property_name" id="property">
                        <option value="LAPTOP" class="text-gray-600" name="property_name
                        " id="property">>LAPTOP COMPUTER</option>
                        <option value="DESKTOP COMPUTER" name="property_name" id="property">>DESKTOP COMPUTER</option>
                        <option value="CELLPHONE" name="property_name" id="property">>CELLPHONE</option>
                        <option value="TABLET" name="property_name
                        " id="property">>TABLET</option>
                        </select> --}}
                    </div>
                </div>
          
               
                <div class="flex p-3">
                    <div class="mb-3 xl:w-full">
                      <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-white"
                        >Description</label
                      >
                      <textarea
                        class="
                          form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          m-0
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        "
                        id="exampleFormControlTextarea1"
                        rows="3"
                       name="description"
                      ></textarea>
                    </div>
                  </div>
              
               
     
       
    
        <button class="text-white bg-button-blue" type="submit">Add</button>
        
     </form>
   
  </div>
