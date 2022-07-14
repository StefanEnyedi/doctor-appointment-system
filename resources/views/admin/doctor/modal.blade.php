<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header" style="background-color: #CFE2FF;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #0D6EFD; font-weight: 700;">Informatii Personal Medical</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body new">
                    <p><img src="{{asset('img')}}/{{$user->image}}" class="table-user-thumb" alt="" width="200"></p>
                    <p class="badge badge-pill badge-green"> Rol: {{$user->role->name == 'doctor' ? 'Personal medical' : 'Administrator'}}</p>
                    <p><span class="style">Nume:</span> {{$user->name}}</p>
                    <p><span class="style">Genul:</span> {{$user->gender}}</p>
                    <p><span class="style">Adresa de e-mail:</span> {{$user->email}}</p>
                    <p><span class="style">Adresa:</span> {{$user->address}}</p>
                    <p><span class="style">Telefon:</span> {{$user->phone_number}}</p>
                    <p><span class="style">Departament:</span> {{$user->department}}</p>
                    <p><span class="style">Studii:</span> {{$user->education}}</p>
                    <p><span class="style">Despre:</span> {{$user->description}}</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Anulare</button>
                  
                  </div>
                </div>
              </div>
            </div>
<style type="text/css">
  .style{
    color: #0D6EFD;
    font-weight: 700;
  }
  .new > p {
    font-size: 18px;
  }

</style>
 