@include('partials.header')

@foreach ($students as $student )
{{$student->first_name}}    
@endforeach

@include('partials.footer')