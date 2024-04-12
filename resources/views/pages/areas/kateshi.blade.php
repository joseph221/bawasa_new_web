@extends('layouts.website_master')
<!-- header section -->

@section('content')
    <div class="content-layout" style="min-height: 269.546px;">
        <div class="container clearfix">
            <!-- CONTENT BLOCK HERE -->
            <section class="main-content mb-2">
                <nav aria-label="breadcrumb" class="breadcrumb-container">
                    <div class="container">
                        <ol class="breadcrumb  py-1 mb-0">
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('messages.Kateshi')}}</li>
                        </ol>
                    </div>
                </nav>
                <div class="content-border">

                    <div class="container">
                        @include("layouts.sidecontent")


                        <div class="sub-main-content js-sub-main-height" style="height: 586.312px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="publication">
                                        <h4 class="title-decoration py-2 mb-3"> {{ __('messages.Kateshi')}}</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr style="background-color: #A9A9A9">
                                                    <th scope="col">S/N</th>
                                                    <th scope="col">Category name</th>
                                                    <th scope="col">Category code</th>
                                                    <th scope="col">Total customers</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Domestic</td>
                                                    <td>D</td>
                                                    <td>2214</td>

                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Commercial</td>
                                                    <td>C</td>
                                                    <td>68</td>

                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Instituition</td>
                                                    <td>INS</td>
                                                    <td>71</td>

                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Industrial</td>
                                                    <td>IND</td>
                                                    <td>18</td>

                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Kiosks</td>
                                                    <td>K</td>
                                                    <td>2</td>

                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr style="background-color: #A9A9A9">
                                                    <td colspan="3">Total</td>
                                                    <td>2373</td>
                                                </tr>
                                                <tr>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- ********************************************** Pagination **********************************************   -->
                                        <nav aria-label="Page navigation" class="nav-pagination">
                                            <ul class="pagination">


                                            </ul>
                                        </nav>
                                        <!-- ********************************************** Pagination **********************************************   -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/sub-main-content -->

            </section>


        </div>
    </div>
@endsection
