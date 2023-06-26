<div>
    <div class="pagetitle">
        <h1>Applicant List</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Applicant</li>
            <li class="breadcrumb-item active">List</li>
          </ol>
        </nav>
      </div>
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">List</h5>
                <table class="table datatable">
                    <a href="btn btn-success" href="#">Add</a>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">IC</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < $applicantModel->count(); $i++)
                        <tr>
                            <th>{{$i+1}}</th>
                            <td>{{$applicantModel[$i]->name}}</td>
                            <td>{{$applicantModel[$i]->ic}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('applicant.show', $applicantModel[$i]->id)}}">View</a>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
