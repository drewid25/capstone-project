

  <div class="bg-gray-text border-r-2 border-l-2 border-r-letter border-l-letter h-full w-full shadow-2xl col-span-7 px-3 py-6">
    <h1 class="text-white font-bold text-2xl mb-3 text-center">Update Property</h1>
    <div class="bg-white h-8/12 p-6  shadow-2xl rounded-lg py-4 px-4">
      <form action="{{ route('updateproperty') }}" method="POST" type="submit" class="py-6 px-2 bg-accent-blue h-50 flex flex-col mx-auto shadow-2xl"  >
        @csrf
  
             <div class="flex flex-row">
              <input type="hidden" value="{{ $property->id }}" name="id" />
                 <div class="p-3 flex flex-col bg-accent-blue w-full">
                     <label for="supplier_name" class="text-letter mr-3">Supplier Name</label>
                     <input type="text" name="supplier_name" class="focus-border-accent-blue" >
                 </div>
                 <div class="p-3 flex flex-col bg-accent-blue w-full">
                     <label for="inovoice_number" class="text-letter mr-3">Invoice Number</label>
                     <input type="text" name="invoice_number" value={{ $property->invoice_number }}>
                 </div>
                </div>
                <div class="flex flex-row">
                 <div class="p-3 flex flex-col bg-accent-blue w-50">
                     <label for="date_acquired" class="text-letter mr-3">Date Acquired</label>
                     <input type="date" name="date_acquired" value={{ $property->date_acquired }}>
                 </div>
                 <div class="flex flex-row ">
                     <div class="p-3 flex flex-col bg-accent-blue">
                         <label for="price" class="text-letter mr-3">Price</label>
                         <input type="text" class="w-50" name="price" value={{ $property->price }}>
                     </div>
                     <div class="p-3 flex flex-col bg-accent-blue ">
                         <label for="quantity" class="text-letter mr-3">Quantity</label>
                         <input type="number" class="w-24" name="quantity" value={{ $property->quantity }}>
                     </div>
                 </div>
                
                </div>
              
                 
                 <div class="p-3 flex flex-col bg-accent-blue">
                     <label for="classification" class="text-letter mr-3">Classification</label>
                     <select name="classification"
                      id="" class="w-50"  >
                     <option value="IT AND COMMUNICATIONS EQUIPMENT" class="text-gray-600">IT AND COMMUNICATIONS EQUIPMENTS</option>
                     <option value="OFFICE EQUIPMENT">OFFICE EQUIPMENTS</option>
                     <option value="FURNITURES AND FIXTURES">FURNITURES AND FIXTURES</option>
                     <option value="MOTOR VEHICLE">MOTOR VEHICLE</option>
                     </select>
                 </div>
                 <div class="p-3 flex flex-col bg-accent-blue">
                     <label for="" class="text-letter mr-3">Category</label>
                     <select name="category"
                      id="" class="w-50"  >
                     <option value="CHAIR" class="text-gray-600">CHAIR</option>
                     <option value="TABLES" class="text-gray-600">TABLES</option>
                     <option value="SOFA" class="text-gray-600">SOFA</option>
                     <option value="CABINET">CABINET</option>
                     <option value="COMPUTER">COMPUTER</option>
                     <option value="TABLET">TABLET</option>
                     <option value="CELLPHONE">CELLPHONE</option>
                     <option value="AIRCONDITIONER">AIRCON</option>
                     </select>
                 </div>
               
                 <div class="flex flex-row">
                     <div class="p-3 flex flex-col bg-accent-blue">
                         <label for="property_number" class="text-letter mr-3">Property Number</label>
                         <input type="text" name="property_number" value={{ $property->property_number }}>
                     </div>
                     <div class="p-3 flex flex-col bg-accent-blue">
                         <label for="property_name" class="text-letter mr-3">Property Name</label>
                         <input type="text" name="property_name" value={{ $property->property_name }}>
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
          <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-white">Description</label>
          <textarea class="
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
                        name="description" value={{ $property->description }}
                       ></textarea>
                     </div>
                   </div>
                  
                   
          
      
        <div class="text-center">
          <button class=" text-lg rounded-full font-bold hover:bg-gray-text text-accent-blue bg-letter hover:text-letter w-24 rounded-lg font-bold" type="submit">Update</button>

        </div>
      



    </form>
  </div>


</div>