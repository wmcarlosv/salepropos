@extends('layout.main') @section('content')

<section class="forms">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header mt-2">
                <h3 class="text-center">{{trans('file.Account Statement')}}</h3>
            </div>
            <div class="card-body">
                <span class="pl-4"><strong>{{trans('file.Account')}}:</strong> {{$lims_account_data->name}} [{{$lims_account_data->account_no}}]</span>
                <div class="table-responsive mb-4">
                    <table id="account-table" class="table table-hover">
                        <thead>
                            <tr>
                                <th class="not-exported"></th>
                                <th>{{trans('file.date')}}</th>
                                <th>{{trans('file.reference')}}</th>
                                <th>{{trans('file.Credit')}}</th>
                                <th>{{trans('file.Debit')}}</th>
                                <th>{{trans('file.Balance')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($credit_list as $key=>$credit)
                            @php $balance = $balance + $credit->amount; @endphp
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{date($general_setting->date_format, strtotime($credit->created_at->toDateString()))}}</td>
                                <td>{{$credit->payment_reference}}</td>
                                <td>{{number_format((float)$credit->amount, 2, '.', '')}}</td>
                                <td>0.00</td>
                                <td>{{number_format((float)$balance, 2, '.', '')}}</td>
                            </tr>
                            @endforeach

                            @foreach($debit_list as $key=>$debit)
                            @php $balance = $balance - $debit->amount; @endphp
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{date($general_setting->date_format, strtotime($debit->created_at->toDateString()))}}</td>
                                <td>{{$debit->payment_reference}}</td>
                                <td>0.00</td>
                                <td>{{number_format((float)$debit->amount, 2, '.', '')}}</td>
                                <td>{{number_format((float)$balance, 2, '.', '')}}</td>
                            </tr>
                            @endforeach

                            @foreach($return_list as $key=>$return)
                            @php $balance = $balance - $return->grand_total; @endphp
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{date($general_setting->date_format, strtotime($return->created_at->toDateString()))}}</td>
                                <td>{{$return->reference_no}}</td>
                                <td>0.00</td>
                                <td>{{number_format((float)$return->grand_total, 2, '.', '')}}</td>
                                <td>{{number_format((float)$balance, 2, '.', '')}}</td>
                            </tr>
                            @endforeach

                            @foreach($purchase_return_list as $key=>$return)
                            @php $balance = $balance + $return->grand_total; @endphp
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{date($general_setting->date_format, strtotime($return->created_at->toDateString()))}}</td>
                                <td>{{$return->reference_no}}</td>
                                <td>{{number_format((float)$return->grand_total, 2, '.', '')}}</td>
                                <td>0.00</td>
                                <td>{{number_format((float)$balance, 2, '.', '')}}</td>
                            </tr>
                            @endforeach

                            @foreach($expense_list as $key=>$expense)
                            @php $balance = $balance - $expense->amount; @endphp
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{date($general_setting->date_format, strtotime($expense->created_at->toDateString()))}}</td>
                                <td>{{$expense->reference_no}}</td>
                                <td>0.00</td>
                                <td>{{number_format((float)$expense->amount, 2, '.', '')}}</td>
                                <td>{{number_format((float)$balance, 2, '.', '')}}</td>
                            </tr>
                            @endforeach

                            @foreach($payroll_list as $key=>$payroll)
                            @php $balance = $balance - $payroll->amount; @endphp
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{date($general_setting->date_format, strtotime($payroll->created_at->toDateString()))}}</td>
                                <td>{{$payroll->reference_no}}</td>
                                <td>0.00</td>
                                <td>{{number_format((float)$payroll->amount, 2, '.', '')}}</td>
                                <td>{{number_format((float)$balance, 2, '.', '')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $("ul#account").siblings('a').attr('aria-expanded','true');
    $("ul#account").addClass("show");
    $("ul#account #account-statement-menu").addClass("active");

    $('#account-table').DataTable( {
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
                }
            },
            {
                extend: 'csv',
                text: '{{trans("file.CSV")}}',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                }
            },
            {
                extend: 'print',
                text: '{{trans("file.Print")}}',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                }
            },
            {
                extend: 'colvis',
                text: '{{trans("file.Column visibility")}}',
                columns: ':gt(0)'
            },
        ],
    } );

</script>
@endsection