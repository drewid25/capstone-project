@include('partials.header')
     <x-adminnav/>
     <div class="container bg-letter py-6 px-6 h-screen mx-auto grid grid-cols-12 grid-flow-col shadow-2xl">
     <x-adminsidebar/>
     <div>
        <div class="bg-accent-blue shadow-2xl py-6 px-3 h-full col-span-7 border-r-2 border-l-2 border-r-letter border-l-letter">
            <h1 class="text-2xl font-bold text-center mb-3 text-letter">Inventory List</h1>
            <div class="bg-letter py-6 px-3 h-96">
            <table class=" border-2 border-border-gray">
                <thead>
                    <tr>
                        <th class="border-2 border-border-gray  bg-accent-blue text-letter text-sm mr-2 w-40">
                        Property Number
                        </th>
                        <th class="border-2 border-border-gray  bg-accent-blue text-letter text-sm   mr-2 w-40">
                        Qty
                        </th>
                        <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm   mr-2 w-40">
                            Item
                        </th>
                        <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm   mr-2 w-96">
                            Description
                        </th>
                        <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm   mr-2 w-32 ">
                           Issued to
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventories as $inventory)
                    <tr>
                  
                    
                
                        <td class='border-2 border-border-gray text-grey text-center text-sm '>{{$inventory->property_number}}</td>
                        <td class='border-2 border-border-gray text-grey text-center text-sm '>{{$inventory->quantity}}</td>
                        <td class='border-2 border-border-gray text-grey text-left text-sm '>{{$inventory->property_name}}</td>
                        <td class='border-2 border-border-gray text-grey text-left text-sm '>{{$inventory->description}}</td>
                        <td class='border-2 border-border-gray  text-grey text-center text-sm  '></td>
                     
                    </tr>
                    @endforeach
                   
                  
                </tbody>
               
            </table>
        
         </div>
        </div>
     </div>
     <x-adminrightbar/>
 
    </div>

@include('partials.footer')