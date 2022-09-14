
@include('partials.header')
 <x-nav/>
 <div class="container py-6 px-6 bg-letter px- h-screen mx-auto grid grid-cols-11 border-2 border-accent-blue grid-flow-col ">
    <x-sidebar/>
 
    <div class="bg-white shadow-2xl py-6 col-span-6 border border-border-gray">
        <h1 class="text-2xl font-bold text-center mb-3 text-accent-blue">INVENTORY LIST</h1>
        <table class=" border border-border-gray">
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
    <x-rightbar/>
 </div>
 




@include('partials.footer')