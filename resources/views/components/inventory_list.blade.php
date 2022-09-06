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
          
            
        
                <td>{{$inventory->property_number}}</td>
                <td>{{$inventory->property_name}}</td>
                <td>{{$inventory->description}}</td>
             
            </tr>
            @endforeach
           
          
        </tbody>
       
    </table>


</div>