@extends('admin.layout')
@section('content')

    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Create Roles</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index-2.html">
                        <i class="material-icons breadmaterial">home</i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Roles</a>
                </li>
                <li class="active">Create Roles</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">

                    <div class="tab-content mar-top">
                        <div id="tab1" class="tab-pane fade active in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="material-icons">receipt</i> Add Roles
                                            </h3>
                                            <span class="pull-right">
                                                   <i class="material-icons clickable">keyboard_arrow_up</i>                                                     <i class="material-icons removepanel clickable">clear</i>
                                                </span>
                                        </div>
                                        <div class="panel-body">
                                            {{Form::open()}}
                                                <div class="form-body">
                                                    <div class="form-group label-floating">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="material-icons">perm_identity</i></span>
                                                            <label class="control-label" for="uname3">Role name</label>
                                                            {{Form::text('role','',['class'=>'form-control'])}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-raised btn-primary">
                                                                Submit
                                                            </button>
                                                            &nbsp;
                                                            <input type="reset" class="btn btn-raised btn-default hidden-xs reset_btn3" value="Reset">
                                                        </div>
                                                    </div>
                                                </div>
                                            {{Form::close()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- content -->
    </aside>
@endsection