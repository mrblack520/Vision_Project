@extends('components.header')
@section('content')





<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
<link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
<style>

  
</style>

</head>
<body>
    <div class="app-container app-theme-black body-tabs-shadow">
       
         
            
             
         <div class="app-main bg-dark">
              
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div class="text-white">Admin Dashboard
                                  {{-- @if(Auth()->user()->name != "")
                                  {{Auth()->user()->name}}
                                  @endif --}}
                               
                                    </div>
                                </div>
                            
                              </div>
                        </div>         
                          
                        <div class="row bg-dark">
                            <div class="col-md-12 ">
                                <div class="main-card mb-3 card bg-dark">
                                    <div class="card-header bg-dark text-white">Active Deals
                                        <div class="btn-actions-pane-right">
                                           
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center text-white">#</th>
                                                <th class="text-white">Name</th>
                                                <th class="text-center text-white">Area</th>
                                                <th class="text-center text-white">Status</th>
                                                <th class="text-center text-white">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center text-white">1</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                           
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading text-white"></div>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-white">DHA</td>
                                                <td class="text-center">
                                                    <div class="badge badge-warning">Pending</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm text-white">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-white">2</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                           
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading text-white"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-white">GULISTAN-E-JOHAR</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success">Completed</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-white"> 3</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                          
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading text-white"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-white">GULSHAN-E-IQBAL</td>
                                                <td class="text-center">
                                                    <div class="badge badge-danger">In Progress</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-white">4</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading text-white"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center text-white">GARDEN-EAST</td>
                                                <td class="text-center">
                                                    <div class="badge badge-info">On Hold</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-block text-center card-footer bg-dark">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
             
        </div>
    </div>
    @endsection
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>