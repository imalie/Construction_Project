@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company Registration</div>

                <form class="form-horizontal" method="POST" action="">
                    <div class="box-body">
                        <div class="form-group col-md-12">
                            <label>Company Name</label>
                            <input type="text"  class="form-control" name="driver_id" placeholder="Enter  ID" required>
                        </div>



                        <div class="form-group col-md-12">
                            <label>Company Id:</label>
                            <input type="text" class="form-control" name="driver_nic" placeholder="NIC" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Driver License No.</label>
                            <input type="text" class="form-control" name="driver_lic" placeholder="Driver lic. no" required>
                        </div>


                        <div class="form-group col-md-12">
                            <label>Driver First Name</label>
                            <input type="text" class="form-control" name="driver_first_name" placeholder="Name" required>
                        </div>

                        <div class="form-group col-md-12">

                            <label>Driver Last Name</label>
                            <input type="text" class="form-control" name="driver_last_name" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-12">

                            <label>Driver NickName</label>
                            <input type="text" class="form-control"  id="nicname" name="driver_nick_name" placeholder="NickName" >
                        </div>
                          <div class="form-group col-md-12">
                            <label>Sinhala Unicode typing area.(Singlish)</label>
                            <textarea class="form-control"  rows="3" id="box1" onkeyup="startText(this.id,'nicname');"></textarea>
                        </div>



                        <div class="form-group col-md-12">
                            <label>Date Joined</label>
                            <input type="date" class="form-control" name="date_joined" placeholder="Joined date" >
                        </div>




                        <div class="form-group col-md-12">
                            <label>Phone No</label>
                            <input type="text" class="form-control" name="phonenum1" placeholder="phone number" >
                        </div>


                        <div class="form-group col-md-12">
                            <label>Address</label>
                            <input type="text" class="form-control" name="driver_adress" placeholder="Enter Address" >
                        </div>




                    </div>

                    <div class="box-footer">

                        <button type="submit" name="addnew" class="btn btn-info pull-right">Save</button>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
