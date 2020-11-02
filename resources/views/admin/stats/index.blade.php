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
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th class="disabled-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($interesses as $interest)
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                                        <input type="checkbox" class="switch-plain" checked>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div>
</div>
@endsection