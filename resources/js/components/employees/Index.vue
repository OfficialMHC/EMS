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
            <div v-if="showMessage" class="callout callout-success alert alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p>{{ message }}</p>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <h3 class="box-title" style="padding-top: 6px"><i class="fa fa-search"></i> View Employee List</h3>
                                </div>
                                <div class="col-xs-12 col-sm-6 text-right">
                                    <router-link :to="{name: 'EmployeesCreate'}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></router-link>
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
                                    <tr v-for="employee in employees" :key="employee.id">
                                        <th scope="row">{{ employee.id }}</th>
                                        <td>
                                            {{ employee.first_name }} {{ employee.middle_name }} {{ employee.last_name }}
                                        </td>
                                        <td>{{ employee.department.department_name }}</td>
                                        <td>
                                            {{ employee.address }}, {{ employee.zip_code }},
                                            <br>
                                            {{ employee.city.city_name }}, {{ employee.state.state_name }}, {{ employee.country.country_name }}
                                        </td>
                                        <td>{{ employee.date_of_birth }}</td>
                                        <td>{{ employee.date_hired }}</td>
                                        <td>{{ employee.status }}</td>
                                        <td>
                                            <router-link :to="{name: 'EmployeesEdit', params: {id: employee.id}}" class="btn btn-xs btn-warning">
                                                <i class='fa fa-edit'></i>
                                            </router-link>
                                        </td>
                                        <td>
                                            <button @click="deleteEmployee(employee.id)" class="btn btn-xs btn-danger">
                                                <i class='fa fa-trash'></i>
                                            </button>
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
        data() {
            return {
                employees: [],
                showMessage: false,
                message: '',
            }
        },
        created() {
            this.getEmployees();
        },
        methods: {
            getEmployees() {
                axios.get('/api/employees')
                    .then(res => {
                        this.employees = res.data.data
                    }).catch(error => {
                        console.log(error);
                })
            },
            deleteEmployee(id) {
                axios.delete('/api/employees/'+id)
                    .then(res => {
                        this.showMessage = true;
                        this.message = res.data;
                        this.getEmployees();
                    })
            }
        }
    }
</script>

<style>

</style>
