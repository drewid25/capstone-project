@include('partials.header')
<x-nav />
<div class="container px-6 py-6 bg-white h-full mx-auto grid grid-cols-11 grid-flow-col items-center">
    <x-sidebar />

    <div class="col-span-6 bg-white shadow-2xl py-6 px-2 h-screen border border-border-gray overflow-auto">
        <h1 class="text-2xl font-bold text-center mb-4 text-accent-blue">LIST OF EMPLOYEES</h1>

        <table class="container border-2 border-border-blue ">
            <thead>
                <tr>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm mr-2 w-auto ">
                        ID number
                    </th>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm mr-2 w-auto">
                        Employee Name
                    </th>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm mr-2 w-auto">
                        Department/Office
                    </th>
                    <th class="border-2 border-border-gray bg-accent-blue text-letter text-sm mr-2 w-auto">
                        Email Address
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach($employees as $employee)
                <tr>
                    <td class='border-2 border-border-gray text-grey text-center text-sm'>{{$employee->ID_number}}</td>
                    <td class='border-2 border-border-gray text-grey text-center text-sm'>{{$employee->employee_name}}</td>
                    <td class='border-2 border-border-gray text-grey text-center text-sm'>{{$employee->department}}</td>
                    <td class='border-2 border-border-gray text-grey text-center text-sm'>{{$employee->email_address}}</td>



                </tr>
                @endforeach


            </tbody>

        </table>
        <div class="text-center mt-10">
            <a href="/addemployee" class="bg-accent-blue text-letter p-2 hover:bg-slate-700 rounded-lg font-bold">ADD NEW EMPLOYEE</a>
        </div>


    </div>
    <x-rightbar />

</div>

@include('partials.footer')
