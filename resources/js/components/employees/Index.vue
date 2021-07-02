<template>
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Employee List</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-users"></i> Employee Management</a></li>
                <li class="active">Employee</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <h3 class="box-title" style="padding-top: 6px"><i class="fa fa-search"></i> View Employee List</h3>
                                </div>
                                <div class="col-xs-12 col-sm-6 text-right">
                                    <a href="" class="btn btn-sm btn-primary">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Address</th>
                                        <th>Date of Birth</th>
                                        <th>Date Hired</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a class="btn btn-xs btn-warning" href=""><i class='fa fa-edit'></i></a>
                                        </td>
                                        <td>
                                            <a class="btn btn-xs btn-danger" href=""><i class='fa fa-trash'></i></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Address</th>
                                        <th>Date of Birth</th>
                                        <th>Date Hired</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</template>

<script>
    export default {

    }
</script>

<style>

</style>
