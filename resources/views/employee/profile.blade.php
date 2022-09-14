
@include('partials.header')
<x-employeenav/>
<div class="container bg-letter py-6 px-6 h-full mx-auto grid grid-cols-3  grid-flow-col ">
<x-employeesidebar/>
<div class="bg-white shadow-2xl py-6 px-6 col-span-4 border border-border-gray">
    <div class="flex mt-5 ml-5">
       <img src="" alt="" class="rounded-full">
       <h1>Andrew Idanol</h1>
    </div>
   <div>
       IT Department
   </div>
  
  
   <div class="flex flex-col mt-10">
       <h1 class="text-center mb-3 font-bold t text-accent-blue">List of Accountablity</h1>
       <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
         <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
           <div class="overflow-hidden">
             <table class="min-w-full border text-center ">
               <thead class="border-b bg-accent-blue">
                 <tr>
                   <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                     Property Number
                   </th>
                   <th scope="col" class="text-sm font-medium text-white px-6 py-4 border-r">
                ITem
                   </th>
                   <th scope="col" class="text-sm font-medium text-white px-6 py-4 w-96 border-r">
                    Description
                   </th>
                   <th scope="col" colspan="2" class="text-sm font-medium text-white px-6 py-4 col-span-2 border-r">
                    Options
                   </th>
                   <th scope="col" colspan="2" class="text-sm font-medium text-white px-6 py-4 col-span-2  border-r">
                   Status
                   </th>
                  
                 </tr>
               </thead class="border-b">
               <tbody>
                 <tr class="bg-white border-b  transition duration-300 ease-in-out hover:bg-button-blue">
                   <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900  border-r">B-001</td>
                   <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap  border-r">
                    Laptop
                   </td>
                   <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                    Macbook Air-2023
                   </td>
                   <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                       <button class="bg-button-blue px-3 py-2 rounded-lg text-letter  hover:bg-accent-blue">Transfer</button>
                     
                       
                        <button class="bg-button-blue px-3 py-2 rounded-lg text-letter  hover:bg-accent-blue ">Return</button>
                        </td>
                 </tr class="bg-white border-b">
                 
                 <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-button-blue">
                   <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 transition duration-300 ease-in-out hover:bg-button-blue border-r">B-002</td>
                   <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                    Laptop
                   </td>
                   <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                    Macbook Air-2023
                   </td>
                   <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                  <button class="bg-button-blue px-3 py-2 rounded-lg text-letter hover:bg-accent-blue">Transfer</button>
                
                  
                   <button class="bg-button-blue px-3 py-2 rounded-lg text-letter hover:bg-accent-blue ">Return</button>
                   </td>
                 
                 </tr class="bg-white border-b">
                 
                 
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
  
   
</div>
<x-employeerightbar/>

</div>

@include('partials.footer')