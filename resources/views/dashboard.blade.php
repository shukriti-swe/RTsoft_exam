@extends('layouts.home')
@section('content')


  <div class="first_table" style="border: 1px solid #d9edf7; ">
  	<table class="table" style="background-color: #f1f1f1; border-bottom: 1px solid black">
  		<div style="background-color: #d9edf7;">
  		<p style=" font-size: 16px; padding: 7px;">Total Product Purchased</p>
  		
  		</div>
  		<div>
  			<p style="background-color: white; font-size: 16px; padding: 7px;">{{$total_purchased}}</p>
  		</div>
    <thead >
      <tr >
        <th>serial</th>
        <th>Time</th>
        <th>Amount</th>

      </tr>
    </thead>

    <tbody>
    	<?php $sl=1;?>
    	@foreach($view_data as $data)
        <tr>
        <td><?php echo $sl;?></td>
        <td>
        	<?php
               $date=$data->created_at;
               $year = date('Y', strtotime($date));
               $month = date('F', strtotime($date));
               echo $month.":".$year;
        	?>
        	</td>
        <td>{{$data->price}}</td>
        
      </tr>
      <?php $sl++;?>
        @endforeach
      
    </tbody>
  </table>
  </div>
  <div class="mid">
  	<p></p>
  </div>


  <div class="second_table" style="border: 1px solid #d9edf7; ">
  	<table class="table" style="background-color: #f1f1f1;">
  		<div style="background-color: #d9f7d9;">
  		<p style=" font-size: 16px; padding: 7px;">Total Product Sales</p>
  		
  		</div>
  		<div>
  			<p style="background-color: white; font-size: 16px; padding: 7px;">{{$total_sale}}</p>
  		</div>
    <thead >
      <tr >
        <th>serial</th>
        <th>Time</th>
        <th>Amount</th>

      </tr>
    </thead>

    <tbody>
    	<?php $sl=1;?>
    	@foreach($view_data2 as $data2)
        <tr>
        <td><?php echo $sl;?></td>
        <td>
        	<?php
               $date=$data2->created_at;
               $year = date('Y', strtotime($date));
               $month = date('F', strtotime($date));
               echo $month.":".$year;
        	?>
        	</td>
        <td>{{$data2->price}}</td>
        
      </tr>
      <?php $sl++;?>
        @endforeach
      
    </tbody>
  </table>
  </div>






@endsection  