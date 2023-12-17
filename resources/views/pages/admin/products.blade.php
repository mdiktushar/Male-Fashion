@extends('layout.adminLayout')

@section('admin-content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Top Products</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Search Engine Marketing</td>
                                    <td class="font-weight-bold">$362</td>
                                    <td>21 Sep 2018</td>
                                    <td class="font-weight-medium">
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Search Engine Optimization</td>
                                    <td class="font-weight-bold">$116</td>
                                    <td>13 Jun 2018</td>
                                    <td class="font-weight-medium">
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Display Advertising</td>
                                    <td class="font-weight-bold">$551</td>
                                    <td>28 Sep 2018</td>
                                    <td class="font-weight-medium">
                                        <div class="badge badge-warning">Pending</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pay Per Click Advertising</td>
                                    <td class="font-weight-bold">$523</td>
                                    <td>30 Jun 2018</td>
                                    <td class="font-weight-medium">
                                        <div class="badge badge-warning">Pending</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-Mail Marketing</td>
                                    <td class="font-weight-bold">$781</td>
                                    <td>01 Nov 2018</td>
                                    <td class="font-weight-medium">
                                        <div class="badge badge-danger">Cancelled</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Referral Marketing</td>
                                    <td class="font-weight-bold">$283</td>
                                    <td>20 Mar 2018</td>
                                    <td class="font-weight-medium">
                                        <div class="badge badge-warning">Pending</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Social media marketing</td>
                                    <td class="font-weight-bold">$897</td>
                                    <td>26 Oct 2018</td>
                                    <td class="font-weight-medium">
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
