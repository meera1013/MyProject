@extends('Admin.design_main')
@section('title'
)
	<h2>Add ToDos</h2>
@endsection
@section('content')
	<form method="POST">
        <div class="input-group">
            <input class="input--style-2" type="text" placeholder="toDo Name" name="name">
        </div>
        <div class="input-group">
            	<textarea class="input--style-2" placeholder="Description" name="desc">
            	</textarea>
        </div>
        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <input class="input--style-2 js-datepicker" type="text" placeholder="Date" name="date">
                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                </div>
            </div>
             <div class="col-2">
                <div class="input-group">
                    <div class="rs-select2 js-select-simple select--no-search">
                        <select name="gender">
                            <option disabled="disabled" selected="selected">Status</option>
                            <option>Pending</option>
                            <option>Complete</option>
                        </select>
                    	<div class="select-dropdown"></div>
                	</div>
                </div>
            </div>
        </div>
        <div class="input-group">
            <div class="rs-select2 js-select-simple select--no-search">
                <select name="class">
                    <option disabled="disabled" selected="selected">Orders</option>
                    <option>Order 1</option>
                    <option>Order 2</option>
                    <option>Order 3</option>
                </select>            	<div class="select-dropdown"></div>
            </div>
        </div>
        <div class="p-t-30">
            <button class="btn btn--radius btn--green" type="submit">Insert</button>
        </div>
    </form>
@endsection