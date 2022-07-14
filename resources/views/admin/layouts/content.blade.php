<script src="{{ asset('js/app.js') }}"defer></script>

<div class="main-content" id="app">
<!--     <appc></appc> -->
                         <div class="container-fluid">
                        <div class="row">
                        <div class="container ">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-users"></i>
        <span class="count-numbers">{{App\Models\User::where('role_id',3)->count()}}</span>
        <span class="count-name">Pacienti</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-users"></i>
        <span class="count-numbers">{{App\Models\User::where('role_id',1)->count()}}</span>
        <span class="count-name">Medici</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-solid fa-calendar-check"></i>
        <span class="count-numbers">{{App\Models\Booking::count()}}</span>
        <span class="count-name">Programari</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-solid fa-file-medical"></i>
        <span class="count-numbers">{{App\Models\Prescription::count()}}</span>
        <span class="count-name">Prescriptii</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-counter five">
        <i class="ik ik-home"></i>
        <span class="count-numbers">{{App\Models\Department::count()}}</span>
        <span class="count-name">Departamente</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-counter six">
        <i class="fa fa-users"></i>
        <span class="count-numbers">{{App\Models\Role::count()}}</span>
        <span class="count-name">Roluri</span>
      </div>
    </div>
  </div>
</div>
 






                        </div>
                        
                    </div>
                </div>
<style type="text/css">
    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
    
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  } 
  .card-counter.five{
    background-color:#FCC300;
    color: #FFF;
  }
  .card-counter.six{
    background-color: #818100;
    color: #FFF;
  }

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
</style>