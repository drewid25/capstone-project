@include('partials.header')
 <x-nav/>
 <div class="container py-6 px-6 bg-letter px- h-screen mx-auto  grid grid-cols-3 border-2 border-black grid-flow-col ">
    <x-sidebar/>
 
    <div class="bg-white shadow-2xl py-6  col-span-4 border border-border-gray">
        <h1 class="text-4xl font-bold text-center mb-3 text-accent-blue">INVENTORY LIST</h1>
        <table class=" border-2 border-border-gray">
            <thead>
                <tr>
                    <th class="border-2 border-border-gray  text-grey mr-2 w-40">
                    Property Number
                    </th>
                    <th class="border-2 border-border-gray  text-grey mr-2 w-40">
                    Qty
                    </th>
                    <th class="border-2 border-border-gray text-grey  mr-2 w-40">
                        Item
                    </th>
                    <th class="border-2 border-border-gray text-grey  mr-2 w-96">
                        Description
                    </th>
                    <th class="border-2 border-border-gray text-grey  mr-2 w-32 ">
                       issued to
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventories as $inventory)
                <tr>
              
                
            
                    <td class='border-2 border-border-gray text-grey '>{{$inventory->property_number}}</td>
                    <td class='border-2 border-border-gray text-grey '>{{$inventory->quantity}}</td>
                    <td class='border-2 border-border-gray text-grey '>{{$inventory->property_name}}</td>
                    <td class='border-2 border-border-gray text-grey '>{{$inventory->description}}</td>
                    <td class='border-2 border-border-gray  text-grey '></td>
                 
                </tr>
                @endforeach
               
              
            </tbody>
           
        </table>
    
    
    </div>
    <x-rightbar/>
 </div>
 




@include('partials.footer')