@extends("layout.dashboard")

@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="fresh-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nom(s)</th>
                                    <th>Prénom(s)</th>
                                    <th>Phone</th>
                                    <th>Filiere</th>
                                    <th>Email</th>
                                    <th>Date d'inscription</th>
                                    <th class="disabled-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>N°</th>
                                    <th>Nom(s)</th>
                                    <th>Prénom(s)</th>
                                    <th>Phone</th>
                                    <th>Filiere</th>
                                    <th>Email</th>
                                    <th>Date d'inscription</th>
                                    <th class="disabled-sorting">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $cpt=1; ?>
                                @foreach($interesses as $interest)
                                <tr>
                                    <td>{{$cpt}}</td>
                                    <td>{{ $interest->getLastName()}}</td>
                                    <td>{{ $interest->getFirstName()}}</td>
                                    <td>{{ $interest->getPhone()}}</td>
                                    <td>{{ $interest->getFiliere()}}</td>
                                    <td>{{ $interest->getEmail()}}</td>
                                    <td>{{ $interest->getDateAdhesion()}}</td>
                                    <td>
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                                        <input type="checkbox" class="switch-plain" checked>
                                    </td>
                                </tr>
                                @endforeach
                                <?php $cpt++; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div>
</div>
@endsection
