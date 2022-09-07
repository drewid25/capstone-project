

  <div class="bg-button-blue col-span-4 border-2 border-black h-full shadow-2xl p-6">
    <h1 class="text-white font-bold text-4xl py-6 text-center">Add Property</h1>
     <form action="{{ route('createproperty')}}" method="POST" type="submit" class="py-6 px-2 bg-accent-blue h-50 flex flex-col w-8/12 mx-auto shadow-2xl"  >
       @csrf
        <div>
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
                        <input type="text" name="price">
                    </div>
                    <div class="p-3 flex flex-col bg-accent-blue ">
                        <label for="" class="text-letter mr-3">Quantity</label>
                        <input type="text" name="quantity">
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
          
               
                <div class="p-3 flex flex-col bg-accent-blue">
                    <label for="" class="text-letter mr-3">DESCRIPTION</label>
                    <input type="text" class="h-28" for="" name="description">
                </div>
              
               
        </div>
       
    
        <button class="text-white bg-button-blue" type="submit">Add</button>
        
     </form>
   
  </div>
