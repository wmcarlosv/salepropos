@extends('layout.main') @section('content')

<section class="forms">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header mt-2">
	           <h4 class="text-center">{{trans('file.Product Quantity Alert')}}</h4>
           </div>
        	<div class="table-responsive mb-4">
                <table id="report-table" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="not-exported"></th>
                            <th>{{trans('file.Image')}}</th>
                            <th>{{trans('file.Product Name')}}</th>
                            <th>{{trans('file.Product Code')}}</th>
                            <th>{{trans('file.Quantity')}}</th>
                            <th>{{trans('file.Alert Quantity')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lims_product_data as $key=>$product)
                        <tr>
                            <td>{{$key}}</td>
                            <td>
                            <?php
                                $images = explode(",", $product->image);
                                $product->base_image = $images[0];
                            ?> 
                                <img src="{{url('public/images/product',$product->base_image)}}" height="80" width="80">
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{number_format((float)($product->qty), 2, '.', '')}}</td>
                            <td>{{number_format((float)($product->alert_quantity), 2, '.', '')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $("ul#report").siblings('a').attr('aria-expanded','true');
    $("ul#report").addClass("show");
    $("ul#report #qtyAlert-report-menu").addClass("active");

    $('#report-table').DataTable( {
        "order": [],
        'language': {
            'lengthMenu': '_MENU_ {{trans("file.records per page")}}',
             "info":      '{{trans("file.Showing")}} _START_ - _END_ (_TOTAL_)',
            "search":  '{{trans("file.Search")}}',
            'paginate': {
                    'previous': '{{trans("file.Previous")}}',
                    'next': '{{trans("file.Next")}}'
            }
        },
        'columnDefs': [
            {
                "orderable": false,
                'targets': 0
            },
            {
                'checkboxes': {
                   'selectRow': true
                },
                'targets': 0
            }
        ],
        'select': { style: 'multi',  selector: 'td:first-child'},
        'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
        dom: '<"row"lfB>rtip',
        buttons: [
            {
                extend: 'pdf',
                text: '{{trans("file.PDF")}}',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
            },
            {
                extend: 'csv',
                text: '{{trans("file.CSV")}}',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
            },
            {
                extend: 'print',
                text: '{{trans("file.Print")}}',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
            },
            {
                extend: 'colvis',
                text: '{{trans("file.Column visibility")}}',
                columns: ':gt(0)'
            }
        ],
    } );

</script>
@endsection