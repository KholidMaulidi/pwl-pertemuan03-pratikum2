@extends('master')

@section('parent')
@parent
@endsection
@section('kholidprofile')
<h3 class="profile-username text-center">Kholid Maulidi</h3>
<div class="text-center">
  <img class="profile-user-img img-fluid img-circle"
      src="../../dist/img/kholid-crop.jpeg"
      alt="User profile picture">
</div>

                <p class="text-muted text-center">Mahasiswa</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>TTL</b> <a class="float-right">Sumenep, 08 Mei 2003</a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">Sumenep</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">kholidmaulidi85@gmail.com</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>View More</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection
