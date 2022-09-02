@include('partials.header')
  
@include('partials.footer')
<ul>
      
    @foreach($students as $student)
    <li class="text-white bg-black">{{$student->gender}} {{$student->gender_count}} </li>
    @endforeach

</ul>