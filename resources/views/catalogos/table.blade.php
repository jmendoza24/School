<section id="drag-area">
  <div class="row" id="card-drag-area" style="background: #F5F7FA; padding-top: 10px;">

    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">School Cycle</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
           
          </div>
        </div>
        <div class="card-content collapse show">
            <table class="table table-striped table-bordered scroll-vertical display">
              <thead class="azul">
              <tr>
                <th>School Cycle</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
                @foreach($ciclos as $ciclo)
                <tr>
                  <td>{{ $ciclo->valor}}</td>
                  <td style="width: 70px;">
                    <button class="btn btn-outline-danger" onclick="borra_catalogo({{ $ciclo->id }})"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Documents</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            
          </div>
        </div>
        <div class="card-content collapse show">
          <table class="table table-striped table-bordered scroll-vertical display">
              <thead class="azul">
              <tr>
                <th>Documents</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
                @foreach($materias as $mat)
                <tr>
                  <td>{{ $mat->valor}}</td>
                  <td style="width: 70px;">
                      <button class="btn btn-outline-danger" onclick="borra_catalogo({{ $mat->id }})"><i class="fa fa-trash"></i></button>                              
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
    {{-- <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Grade</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            
          </div>
        </div>
        <div class="card-content collapse show">
          <table class="table table-striped table-bordered scroll-vertical display">
              <thead class="azul">
              <tr>
                <th>Grade</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
                @foreach($grados as $grado)
                <tr>
                  <td>{{ $grado->valor}}</td>
                  <td style="width: 70px;">
                    <button class="btn btn-outline-danger" onclick="borra_catalogo({{ $grado->id }})"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div> --}}
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Groups</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
           
          </div>
        </div>
        <div class="card-content collapse show">
          <table class="table table-striped table-bordered scroll-vertical display">
              <thead class="azul">
              <tr>
                <th>Groups</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
                @foreach($grupos as $grupo)
                <tr>
                  <td>{{ $grupo->valor}}</td>
                  <td style="width: 70px;">
                        <button class="btn btn-outline-danger" onclick="borra_catalogo({{ $grupo->id }})"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
