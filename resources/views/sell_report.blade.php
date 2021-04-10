@extends('layouts.home')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th>Serial</th>
        <th>Customer Name</th>
        <th>Product Name</th>
        <th>Transection Type</th>
        <th>Product Price</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      
        <?php if(!empty($customer_details)){ $sl=1;?>
        @foreach($customer_details as $customer_detail)
        <tr>
        <td><?php echo $sl;?></td>
        <td>{{$customer_detail->c_name}}</td>
        <td>{{$customer_detail->p_name}}</td>
        <td>Purchased</td>
        <td>{{$customer_detail->p_price}}</td>
        <td>{{$customer_detail->date}}</td>
        </tr>
        <?php $sl++;?>
        @endforeach
        <?php } ?>

        <?php if(!empty($customer_details2)){ ?>
        @foreach($customer_details2 as $customer_detail2)
        <tr>
        <td><?php echo $sl;?></td>
        <td>{{$customer_detail2->c_name}}</td>
        <td>{{$customer_detail2->p_name}}</td>
        <td>Sales</td>
        <td>{{$customer_detail2->p_price}}</td>
        <td>{{$customer_detail2->date}}</td>
        </tr>
        <?php $sl++;?>
        @endforeach
        <?php } ?>
      
      
    </tbody>
  </table>


@endsection  