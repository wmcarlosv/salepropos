@extends('layout.main')
@section('content')
@if(session()->has('not_permitted'))
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div> 
@endif
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('file.Group Permission')}}</h4>
                    </div>
                    {!! Form::open(['route' => 'role.setPermission', 'method' => 'post']) !!}
                    <div class="card-body">
                    	<input type="hidden" name="role_id" value="{{$lims_role_data->id}}" />
						<div class="table-responsive">
						    <table class="table table-bordered table-striped permission-table">
						        <thead>
						        <tr>
						            <th colspan="5" class="text-center">{{$lims_role_data->name}} {{trans('file.Group Permission')}}</th>
						        </tr>
						        <tr>
						            <th rowspan="2" class="text-center">Module Name                                    </th>
						            <th colspan="4" class="text-center">{{trans('file.Permissions')}}&nbsp;&nbsp; <input type="checkbox" id="select_all" class="checkbox"></th>
						        </tr>
						        <tr>
						            <th class="text-center">{{trans('file.View')}}</th>
						            <th class="text-center">{{trans('file.add')}}</th>
						            <th class="text-center">{{trans('file.edit')}}</th>
						            <th class="text-center">{{trans('file.delete')}}</th>
						        </tr>
						        </thead>
						        <tbody>
						        <tr>
						            <td>{{trans('file.product')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("products-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="products-index" checked />
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="products-index" />
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("products-add", $all_permission))
						               	<input type="checkbox" value="1" class="checkbox" name="products-add" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="products-add">
						                @endif
						                </div>

						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("products-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="products-edit" checked />
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="products-edit" />
						                @endif
						                </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("products-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="products-delete" checked />
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="products-delete" />
						                @endif
						                </div>
						            </td>
						        </tr>

						        <tr>
						            <td>{{trans('file.Purchase')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("purchases-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="purchases-index" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="purchases-index">
						                @endif
						                </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("purchases-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="purchases-add" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="purchases-add">
						                @endif
						                </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("purchases-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="purchases-edit" checked />
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="purchases-edit">
						                @endif
						                </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("purchases-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="purchases-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="purchases-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>{{trans('file.Sale')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("sales-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="sales-index" checked />
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="sales-index">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("sales-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="sales-add" checked />
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="sales-add">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("sales-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="sales-edit" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="sales-edit">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("sales-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="sales-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="sales-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>{{trans('file.Expense')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("expenses-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="expenses-index" checked />
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="expenses-index">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("expenses-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="expenses-add" checked />
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="expenses-add">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("expenses-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="expenses-edit" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="expenses-edit">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("expenses-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="expenses-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="expenses-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>{{trans('file.Quotation')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("quotes-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="quotes-index" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="quotes-index">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("quotes-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="quotes-add" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="quotes-add">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("quotes-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="quotes-edit" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="quotes-edit">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("quotes-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="quotes-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="quotes-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>{{trans('file.Transfer')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("transfers-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="transfers-index" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="transfers-index">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("transfers-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="transfers-add" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="transfers-add">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("transfers-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="transfers-edit" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="transfers-edit">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("transfers-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="transfers-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="transfers-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>{{trans('file.Sale Return')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("returns-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="returns-index" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="returns-index">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("returns-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="returns-add" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="returns-add">
						                @endif
						                </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("returns-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="returns-edit" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="returns-edit">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("returns-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="returns-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="returns-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>

						        <tr>
						            <td>{{trans('file.Purchase Return')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("purchase-return-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="purchase-return-index" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="purchase-return-index">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("purchase-return-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="purchase-return-add" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="purchase-return-add">
						                @endif
						                </div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("purchase-return-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="purchase-return-edit" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="purchase-return-edit">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("purchase-return-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="purchase-return-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="purchase-return-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>
						        <tr>
						            <td>{{trans('file.Accounting')}}</td>
						            <td colspan="5">
						            	<span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("account-index", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="account-index" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="account-index">
					                    	@endif
						                    </div>
						                    <label for="account-index" class="padding05">{{trans('file.Account')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("balance-sheet", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="balance-sheet" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="balance-sheet">
					                    	@endif
						                    </div>
						                    <label for="balance-sheet" class="padding05">{{trans('file.Balance Sheet')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("account-statement", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="account-statement" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="account-statement">
					                    	@endif
						                    </div>
						                    <label for="account-statement" class="padding05">{{trans('file.Account Statement')}} &nbsp;&nbsp;</label>
						                </span>
						            </td>
						        </tr>
						        <tr>
						            <td>HRM</td>
						            <td colspan="5">
						            	<span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("department", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="department" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="department">
					                    	@endif
						                    </div>
						                    <label for="department" class="padding05">{{trans('file.Department')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("attendance", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="attendance" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="attendance">
					                    	@endif
						                    </div>
						                    <label for="attendance" class="padding05">{{trans('file.Attendance')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("payroll", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="payroll" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="payroll">
					                    	@endif
						                    </div>
						                    <label for="payroll" class="padding05">{{trans('file.Payroll')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("holiday", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="holiday" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="holiday">
					                    	@endif
						                    </div>
						                    <label for="holiday" class="padding05">{{trans('file.Holiday Approve')}} &nbsp;&nbsp;</label>
						                </span>
						            </td>
						        </tr>
						        <tr>
						            <td>{{trans('file.Employee')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("employees-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="employees-index" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="employees-index">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("employees-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="employees-add" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="employees-add">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("employees-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="employees-edit" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="employees-edit">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("employees-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="employees-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="employees-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>
						        <tr>
						            <td>{{trans('file.User')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("users-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="users-index" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="users-index">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("users-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="users-add" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="users-add">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("users-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="users-edit" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="users-edit">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("users-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="users-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="users-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>
						        <tr>
						            <td>{{trans('file.customer')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("customers-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="customers-index" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="customers-index">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("customers-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="customers-add" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="customers-add">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
						                @if(in_array("customers-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="customers-edit" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="customers-edit">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("customers-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="customers-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="customers-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>
						        <tr>
						            <td>{{trans('file.Supplier')}}</td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("suppliers-index", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="suppliers-index" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="suppliers-index">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("suppliers-add", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="suppliers-add" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="suppliers-add">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("suppliers-edit", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="suppliers-edit" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="suppliers-edit">
						                @endif
						            	</div>
						            </td>
						            <td class="text-center">
						                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false">
						                @if(in_array("suppliers-delete", $all_permission))
						                <input type="checkbox" value="1" class="checkbox" name="suppliers-delete" checked>
						                @else
						                <input type="checkbox" value="1" class="checkbox" name="suppliers-delete">
						                @endif
						            	</div>
						            </td>
						        </tr>
						        <tr>
						            <td>{{trans('file.Reports')}}</td>
						            <td colspan="5">
						            	<span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("profit-loss", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="profit-loss" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="profit-loss">
					                    	@endif
						                    </div>
						                    <label for="profit-loss" class="padding05">{{trans('file.Summary Report')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("best-seller", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="best-seller" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="best-seller">
					                    	@endif
						                    </div>
						                    <label for="best-seller" class="padding05">{{trans('file.Best Seller')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("daily-sale", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="daily-sale" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="daily-sale">
					                    	@endif
						                    </div>
						                    <label for="daily-sale" class="padding05">{{trans('file.Daily Sale')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("monthly-sale", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="monthly-sale" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="monthly-sale">
					                    	@endif
						                    </div>
						                    <label for="monthly-sale" class="padding05">{{trans('file.Monthly Sale')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("daily-purchase", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="daily-purchase" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="daily-purchase">
					                    	@endif
						                    </div>
						                    <label for="daily-purchase" class="padding05">{{trans('file.Daily Purchase')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("monthly-purchase", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="monthly-purchase" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="monthly-purchase">
					                    	@endif
						                    </div>
						                    <label for="monthly-purchase" class="padding05">{{trans('file.Monthly Purchase')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("product-report", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="product-report" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="product-report">
					                    	@endif
						                    </div>
						                    <label for="product-report" class="padding05">{{trans('file.Product Report')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("payment-report", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="payment-report" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="payment-report">
					                    	@endif
						                    </div>
						                    <label for="payment-report" class="padding05">{{trans('file.Payment Report')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("purchase-report", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="purchase-report" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="purchase-report">
					                    	@endif
						                    </div>
						                    <label for="purchase-report" class="padding05"> {{trans('file.Purchase Report')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("sale-report", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="sale-report" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="sale-report">
					                    	@endif
						                    </div>
						                    <label for="sale-report" class="padding05">{{trans('file.Sale Report')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("warehouse-report", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="warehouse-report" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="warehouse-report">
					                    	@endif
						                    </div>
						                    <label for="warehouse-report" class="padding05">{{trans('file.Warehouse Report')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("warehouse-stock-report", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="warehouse-stock-report" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="warehouse-stock-report">
					                    	@endif
						                    </div>
						                    <label for="warehouse-stock-report" class="padding05">{{trans('file.Warehouse Stock Chart')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("product-qty-alert", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="product-qty-alert" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="product-qty-alert">
					                    	@endif
						                    </div>
						                    <label for="product-qty-alert" class="padding05">{{trans('file.Product Quantity Alert')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("user-report", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="user-report" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="user-report">
					                    	@endif
						                    </div>
						                    <label for="user-report" class="padding05">{{trans('file.User Report')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("customer-report", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="customer-report" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="customer-report">
					                    	@endif
						                    </div>
						                    <label for="customer-report" class="padding05">{{trans('file.Customer Report')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("supplier-report", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="supplier-report" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="supplier-report">
					                    	@endif
						                    </div>
						                    <label for="Supplier-report" class="padding05">{{trans('file.Supplier Report')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("due-report", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="due-report" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="due-report">
					                    	@endif
						                    </div>
						                    <label for="due-report" class="padding05">{{trans('file.Due Report')}} &nbsp;&nbsp;</label>
						                </span>
						            </td>
						        </tr>
						        <tr>
						            <td>{{trans('file.settings')}}</td>
						            <td colspan="5">
						            	<span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("customer_group", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="customer_group" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="customer_group">
					                    	@endif
						                    </div>
						                    <label for="customer_group" class="padding05">{{trans('file.Customer Group')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("unit", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="unit" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="unit">
					                    	@endif
						                    </div>
						                    <label for="unit" class="padding05">{{trans('file.Unit')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("tax", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="tax" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="tax">
					                    	@endif
						                    </div>
						                    <label for="tax" class="padding05">{{trans('file.Tax')}} &nbsp;&nbsp;</label>
						                </span>
						            	<span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("general_setting", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="general_setting" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="general_setting">
					                    	@endif
						                    </div>
						                    <label for="general_setting" class="padding05">{{trans('file.General Setting')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("mail_setting", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="mail_setting" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="mail_setting">
					                    	@endif
						                    </div>
						                    <label for="mail_setting" class="padding05">{{trans('file.Mail Setting')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("sms_setting", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="sms_setting" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="sms_setting">
					                    	@endif
						                    </div>
						                    <label for="sms_setting" class="padding05">{{trans('file.SMS Setting')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("create_sms", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="create_sms" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="create_sms">
					                    	@endif
						                    </div>
						                    <label for="create_sms" class="padding05">{{trans('file.Create SMS')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("pos_setting", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="pos_setting" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="pos_setting">
					                    	@endif
						                    </div>
						                    <label for="pos_setting" class="padding05">{{trans('file.POS Setting')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("hrm_setting", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="hrm_setting" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="hrm_setting">
					                    	@endif
						                    </div>
						                    <label for="hrm_setting" class="padding05">{{trans('file.HRM Setting')}} &nbsp;&nbsp;</label>
						                </span>
						            </td>
						        </tr>
						        <tr>
						            <td>{{trans('file.Miscellaneous')}}</td>
						            <td colspan="5">
						            	<span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("stock_count", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="stock_count" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="stock_count">
					                    	@endif
						                    </div>
						                    <label for="stock_count" class="padding05">{{trans('file.Stock Count')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("adjustment", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="adjustment" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="adjustment">
					                    	@endif
						                    </div>
						                    <label for="adjustment" class="padding05">{{trans('file.Adjustment')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("gift_card", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="gift_card" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="gift_card">
					                    	@endif
						                    </div>
						                    <label for="gift_card" class="padding05">{{trans('file.Gift Card')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("coupon", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="coupon" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="coupon">
					                    	@endif
						                    </div>
						                    <label for="coupon" class="padding05">{{trans('file.Coupon')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("print_barcode", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="print_barcode" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="print_barcode">
					                    	@endif
						                    </div>
						                    <label for="print_barcode" class="padding05">{{trans('file.print_barcode')}} &nbsp;&nbsp;</label>
						                </span>
						                <span style="display:inline-block;">
						                    <div class="text-center" aria-checked="false" aria-disabled="false">
					                    	@if(in_array("empty_database", $all_permission))
					                    	<input type="checkbox" value="1" class="checkbox" name="empty_database" checked>
					                    	@else
					                    	<input type="checkbox" value="1" class="checkbox" name="empty_database">
					                    	@endif
						                    </div>
						                    <label for="empty_database" class="padding05">{{trans('file.Empty Database')}} &nbsp;&nbsp;</label>
						                </span>
						            </td>
						        </tr>
						        </tbody>
						    </table>
						</div>
						<div class="form-group">
	                        <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary">
	                    </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

	$("ul#setting").siblings('a').attr('aria-expanded','true');
    $("ul#setting").addClass("show");
    $("ul#setting #role-menu").addClass("active");

	$("#select_all").on( "change", function() {
	    if ($(this).is(':checked')) {
	        $("tbody input[type='checkbox']").prop('checked', true);
	    } 
	    else {
	        $("tbody input[type='checkbox']").prop('checked', false);
	    }
	});
</script>
@endsection