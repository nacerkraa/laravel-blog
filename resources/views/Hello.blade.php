<x-header data="Hello Component Header"/>


@if($name == 'nacer') 
    <h3>Hello {{$name}} you are the admin</h3>   
@else
      <td> Guest </td>   
@endif