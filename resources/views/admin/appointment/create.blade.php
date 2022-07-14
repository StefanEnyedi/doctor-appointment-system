@extends('admin.layouts.master')

@section('content')
<div id="app"></div>
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
           

            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Personal medical</h5>
                    <span>Selectare data & ora pentru programari</span>
                    
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Programari</li>
            </ol> -->
        </nav>
    </div>
    </div>
</div>

<div class="container">
         @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert" style="color: orange;">
                {{Session::get('message')}}
            </div>
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
                
            </div>
                
        @endforeach
    
        
    <form action="{{route('appointment.store')}}" method="post">@csrf
 
    <div class="card" data-provide="datepicker">
        <div class="card-header" style="color: #0D6EFD; font-weight: 700; background-color: #CFE2FF;">
            Alege data
        </div>
        <div class="card-body">
        <input type="text" data-date-format="YYYY-MM-DD" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
        </div>
    </div>


    <div class="card">
        <div class="card-header" style="color: #0D6EFD; font-weight: 700; background-color: #CFE2FF;">
            Alege ora AM (dimineata)
           <span style="margin-left: 650px;">Bifeaza/Debifeaza
               <input  type="checkbox" onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked" >
           </span>
        </div>
        <div class="card-body">
            
            <table class="table table-striped">
             
               
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><input type="checkbox" name="time[]"  value="6am">6:00 AM</td>
                  <td><input type="checkbox" name="time[]"  value="6.20am">6:20 AM</td>
                  <td><input type="checkbox" name="time[]"  value="6.40am">6:40 AM</td>
                </tr>
                 <tr>
                  <th scope="row">2</th>
                  <td><input type="checkbox" name="time[]"  value="7am">7:00 AM</td>
                  <td><input type="checkbox" name="time[]"  value="7.20am">7:20 AM</td>
                  <td><input type="checkbox" name="time[]"  value="7.40am">7:40 AM</td>
                </tr>
                 <tr>
                  <th scope="row">3</th>
                  <td><input type="checkbox" name="time[]"  value="8am">8:00 AM</td>
                  <td><input type="checkbox" name="time[]"  value="8.20am">8:20 AM</td>
                  <td><input type="checkbox" name="time[]"  value="8.40am">8:40 AM</td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td><input type="checkbox" name="time[]"  value="9am">9:00 AM</td>
                  <td><input type="checkbox" name="time[]"  value="9.20am">9:20 AM</td>
                  <td><input type="checkbox" name="time[]"  value="9.40am">9:40 AM</td>
                </tr>

                <tr>
                  <th scope="row">5</th>
                  <td><input type="checkbox" name="time[]"  value="10am">10:00 AM</td>
                  <td><input type="checkbox" name="time[]"  value="10.20am">10:20 AM</td>
                  <td><input type="checkbox" name="time[]"  value="10.40am">10:40 AM</td>
                </tr>

                <tr>
                  <th scope="row">6</th>
                  <td><input type="checkbox" name="time[]"  value="11am">11:00 AM</td>
                  <td><input type="checkbox" name="time[]"  value="11.20am">11:20 AM</td>
                  <td><input type="checkbox" name="time[]"  value="11.40am">11:40 AM</td>
                </tr>
            
            
              </tbody>
            </table>
        </div>
    </div>

        <div class="card">
        <div class="card-header" style="color: #0D6EFD; font-weight: 700; background-color: #CFE2FF;">
            Alege ora PM (dupa amiaza)
        </div>
        <div class="card-body">
            
            <table class="table table-striped">
             
               
              <tbody>
                <tr>
                  <th scope="row">7</th>
                  <td><input type="checkbox" name="time[]"  value="12pm">12:00 PM</td>
                  <td><input type="checkbox" name="time[]"  value="12.20pm">12:20 PM</td>
                  <td><input type="checkbox" name="time[]"  value="12.40pm">12:40 PM</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td><input type="checkbox" name="time[]"  value="1pm">13:00 PM</td>
                  <td><input type="checkbox" name="time[]"  value="1.20pm">13:20 PM</td>
                  <td><input type="checkbox" name="time[]"  value="1.40pm">13:40 PM</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td><input type="checkbox" name="time[]"  value="2pm">14:00 PM</td>
                  <td><input type="checkbox" name="time[]"  value="2.20pm">14:20 PM</td>
                  <td><input type="checkbox" name="time[]"  value="2.40pm">14:40 PM</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td><input type="checkbox" name="time[]"  value="3pm">15:00 PM</td>
                  <td><input type="checkbox" name="time[]"  value="3.20pm">15:20 PM</td>
                  <td><input type="checkbox" name="time[]"  value="3.40pm">15:40 PM</td>
                </tr>
                <tr>
                  <th scope="row">11</th>
                  <td><input type="checkbox" name="time[]"  value="4pm">16:00 PM</td>
                  <td><input type="checkbox" name="time[]"  value="4.20pm">16:20 PM</td>
                  <td><input type="checkbox" name="time[]"  value="4.40pm">16:40 PM</td>
                </tr>
                <tr>
                  <th scope="row">12</th>
                  <td><input type="checkbox" name="time[]"  value="5pm">17:00 PM</td>
                  <td><input type="checkbox" name="time[]"  value="5.20pm">17:20 PM</td>
                  <td><input type="checkbox" name="time[]"  value="5.40pm">17:40 PM</td>
                </tr>
                <tr>
                  <th scope="row">13</th>
                  <td><input type="checkbox" name="time[]"  value="6pm">18:00 PM</td>
                  <td><input type="checkbox" name="time[]"  value="6.20pm">18:20 PM</td>
                  <td><input type="checkbox" name="time[]"  value="6.40pm">18:40 PM</td>
                </tr>
                <tr>
                  <th scope="row">14</th>
                  <td><input type="checkbox" name="time[]"  value="7pm">19:00 PM</td>
                  <td><input type="checkbox" name="time[]"  value="7.20pm">19:20 PM</td>
                  <td><input type="checkbox" name="time[]"  value="7.40pm">19:40 PM</td>
                </tr>
                <tr>
                  <th scope="row">15</th>
                  <td><input type="checkbox" name="time[]"  value="8pm">20:00 PM</td>
                  <td><input type="checkbox" name="time[]"  value="8.20pm">20:20 PM</td>
                  <td><input type="checkbox" name="time[]"  value="8.40pm">20:40 PM</td>
                </tr>
                <tr>
                  <th scope="row">16</th>
                  <td><input type="checkbox" name="time[]"  value="9pm">21:00 PM</td>
                  <td><input type="checkbox" name="time[]"  value="9.20pm">21:20 PM</td>
                  <td><input type="checkbox" name="time[]"  value="9.40pm">21:40 PM</td>
                </tr>
                
            
            
              </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Trimite</button>
        </div>
    </div>
    </form>

</div>

<style type="text/css">
    input[type="checkbox"]{
        zoom:1.1;
        margin: 5px;
        vertical-align: middle;
   
    }
    body{
        font-size: 18px;
    }
    td{
        margin: 5px;
    }
</style>


@endsection