@include('partials.header')
 <x-nav/>
 <div class="  w-screen py-6 px-6 bg-letter px- h-screen mx-auto mt-10 grid grid-col-3  grid-flow-col ">
    <x-sidebar/>
    <div class="bg-white shadow-2xl py-6 px-6">

        <table class="table-auto border-2 border-accent-blue">
            <thead>
                <tr>
                    <th class="border-2 border-accent-blue mr-2 w-40">
                    Property Number
                    </th>
                    <th class="border-2 border-accent-blue mr-2 w-40">
                        Item
                    </th>
                    <th class="border-2 border-accent-blue mr-2 w-48">
                        Description
                    </th>
                    <th class="border-2 border-accent-blue mr-2 w-48">
                       issued to
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventories as $inventory)
                <tr>
              
                
            
                    <td class='border-2 border-accent-blue'>{{$inventory->property_number}}</td>
                    <td class='border-2 border-accent-blue'>{{$inventory->property_name}}</td>
                    <td class='border-2 border-accent-blue'>{{$inventory->description}}</td>
                 
                </tr>
                @endforeach
               
              
            </tbody>
           
        </table>
    
    
    </div>
    <x-rightbar/>
 </div>
 




@include('partials.footer')